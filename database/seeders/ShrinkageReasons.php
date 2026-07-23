<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShrinkageReasons extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shrinkage_reason')->insert([
            [
                'name' => 'Robo',
                'code' => 'THEFT',
                'description' => 'Pérdida de inventario debido a robo o hurto.',
                'is_active' => true,
            ],
            [
                'name' => 'Deterioro',
                'code' => 'DAMAGE',
                'description' => 'Pérdida de inventario debido a daños físicos o deterioro.',
                'is_active' => true,
            ],
            [
                'name' => 'Caducidad',
                'code' => 'EXPIRATION',
                'description' => 'Pérdida de inventario debido a la caducidad de productos perecederos.',
                'is_active' => true,
            ],
            [
                'name' => 'Error de Inventario',
                'code' => 'INVENTORY_ERROR',
                'description' => 'Pérdida de inventario debido a errores en el conteo o registro.',
                'is_active' => true,
            ],
            [
                'name' => 'Devolución de Cliente',
                'code' => 'CUSTOMER_RETURN',
                'description' => 'Pérdida de inventario debido a devoluciones de clientes.',
                'is_active' => true,
            ],
            [
                'name' => 'Uso Interno',
                'code' => 'INTERNAL_USE',
                'description' => 'Pérdida de inventario debido a uso interno o muestras.',
                'is_active' => true,
            ],
            [
                'name' => 'Otros',
                'code' => 'OTHER',
                'description' => 'Pérdida de inventario debido a otras razones no especificadas.',
                'is_active' => true,
            ]
        ]);
    }
}
