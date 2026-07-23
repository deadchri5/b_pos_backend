<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("
        create or replace procedure registrar_venta(
            productos jsonb,
            id_almacen integer,
            payment_method integer,
            client_id integer
        )
        language plpgsql
        as $$
        declare
            producto jsonb;
            v_id_producto integer;
            v_cantidad numeric(10,2);
            precio numeric;
            total numeric := 0;
            total_parcial numeric;
            publico_general_id integer;
            venta_id integer;
            inventario_actual numeric;
            product_unit varchar;
        begin

            if client_id is null then
                -- obtener cliente
                select id
                into publico_general_id
                from clients
                where name = 'Público General'
                limit 1;
            else
                select id
                into publico_general_id
                from clients
                where id = client_id
                limit 1;
            end if;

            -- insertar venta
            insert into sales (
                client_id,
                date,
                total_amount,
                registration_date
            )
            values (
                publico_general_id,
                now(),
                payment_method,
                now()
            )
            returning id into venta_id;

            -- recorrer productos
            for producto in
                select * from jsonb_array_elements(productos)
            loop

                v_id_producto := (producto->>'id_producto')::integer;
                v_cantidad := (producto->>'cantidad')::numeric(10,2);

                -- obtener precio y unidad
                select
                    p.price,
                    pu.code
                into
                    precio,
                    product_unit
                from
                    products p
                left join product_unit pu on p.unit_id = pu.id
                where
                    p.id = v_id_producto;

                if precio is null then
                    raise exception 'Producto % no existe', v_id_producto;
                end if;

                -- validar inventario
                select current_stock
                into inventario_actual
                from warehouse_stock
                where warehouse_id = id_almacen
                and product_id = v_id_producto;

                --if inventario_actual < v_cantidad then 
                    --raise exception 'Inventario insuficiente para producto %', v_id_producto;
                --end if;

                -- subtotal
                total_parcial := precio * v_cantidad;

                -- insertar detalle
                insert into sales_details (
                    sale_id,
                    product_id,
                    quantity,
                    unit_type,
                    price_per_unit,
                    total_price,
                    warehouse_id,
                    payment_method_id
                )
                values (
                    venta_id,
                    v_id_producto,
                    v_cantidad,
                    product_unit,
                    precio,
                    total_parcial,
                    id_almacen,
                    payment_method
                );

                -- descontar inventario
                update warehouse_stock
                set current_stock = current_stock - v_cantidad
                where warehouse_id = id_almacen
                and product_id = v_id_producto;

                -- acumular total
                total := total + total_parcial;

            end loop;

            -- actualizar venta
            update sales
            set total_amount = total
            where id = venta_id;

        end;
        $$;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS registrar_venta");
    }
};
