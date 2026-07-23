<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Warehouse\GetWhInventory;

// Models
use App\Models\Warehouse\Warehouse;

class Stock extends Controller
{
    public function getInventory(Request $request)
    {
        $warehouse_id = $request->query('selected_wh_id');

        if (!$warehouse_id) {
            return response()->json(['message' => 'Falta el ID del almacén', 'status' => 'error'], 400);
        }

        $inventory = GetWhInventory::main($warehouse_id);

        return response()->json(['data' => $inventory, 'status' => 'success'], 200);
    }

    public function getWarehouses()
    {
        $warehouses = Warehouse::all();

        return response()->json(['data' => $warehouses, 'status' => 'success'], 200);
    }

    public function getInventoryBySku(string $sku, int $warehouse_id)
    {

        $inventory = GetWhInventory::bySkuAndWarehouse($sku, $warehouse_id);

        if (!$inventory) {
            return response()->json(['message' => 'No se encontró inventario para el SKU proporcionado', 'status' => 'error'], 404);
        }

        return response()->json(['data' => $inventory, 'status' => 'success'], 200);
    }

}