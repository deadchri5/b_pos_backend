<?php

namespace App\Repositories\Warehouse;

use Illuminate\Support\Facades\DB;
use App\Http\Dtos\Warehouse\StockDto;

class GetWhInventory
{
    /**
     * Get the inventory of a warehouse
     * @param int $warehouse_id current warehouse id
     */
    public static function main(int $warehouse_id)
    {
        $query = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.category_id')
            ->join('departments as d', 'd.id', '=', 'c.departament_id')
            ->join('warehouse_stock as ws', 'ws.product_id', '=', 'p.id')
            ->join('product_unit as pu', 'p.unit_id', '=', 'pu.id')
            ->select(
                'p.id',
                'p.name',
                'p.sku',
                DB::raw('d.name as department'),
                'p.price',
                'pu.code',
                DB::raw("
                    SUM(
                        CASE 
                            WHEN ws.warehouse_id = $warehouse_id
                            THEN ws.current_stock 
                            ELSE 0 
                        END
                    ) as selected_wh_stock
                "),
                DB::raw('SUM(ws.current_stock) as total_stock')
            )
            ->where('p.status', 'AC')
            ->limit(36)
            ->groupBy(
                'p.id',
                'p.name',
                'p.sku',
                'd.name',
                'pu.code',
                'p.price'
            );


        $inventory = $query->get();

        if ($inventory->isEmpty()) {
            return [];
        }

        $inventory = $inventory->map(function ($item) {
            return new StockDto(
                id: $item->id,
                name: $item->name,
                sku: $item->sku,
                department: $item->department,
                price: $item->price,
                unit_code: $item->code,
                selected_wh_stock: $item->selected_wh_stock,
                total_stock: $item->total_stock
            );
        });

        return $inventory;
    }


    /**
     * Get the inventory of a product by its SKU
     * @param string $sku product sku
     * @param int $warehouse_id warehouse id
     */
    public static function bySkuAndWarehouse(string $sku, int $warehouse_id)
    {
        $query = DB::table('warehouse_stock as ws')
            ->join('products as p', 'p.id', '=', 'ws.product_id')
            ->join('warehouses as w', 'w.id', '=', 'ws.warehouse_id')
            ->select(
                'w.id as warehouse_id',
                'ws.current_stock'
            )
            ->where('p.sku', $sku)
            ->where('ws.warehouse_id', $warehouse_id)
            ->where('p.status', 'AC');
        
        $inventory = $query->get();

        if ($inventory->isEmpty()) {
            return null;
        }

        return $inventory->map(function ($item) {
            return [
                'warehouse_id' => $item->warehouse_id,
                'current_stock' => $item->current_stock
            ];
        });
        
    }
}
