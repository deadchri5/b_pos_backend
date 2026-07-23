<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Dtos\Products\ProductToSell;
use Illuminate\Support\Facades\DB;

class SellOrder extends Controller
{
    public function sell(Request $request)
    {

        // get the products array from json body
        $products = $request->input('products');
        $warehouse_id = $request->input('warehouse_id');
        $payment_method = $request->input('payment_method');
        $client_id = $request->input('client_id');

        if (!$products || !$warehouse_id || !$payment_method) {
            return response()->json(['message' => 'Faltan datos requeridos', 'status' => 'error'], 400);
        }

        if (!is_array($products)) {
            return response()->json(['message' => 'El campo products debe ser un array', 'status' => 'error'], 400);
        }

        if (!$client_id) {
            $client_id = null;
        }

        $products = array_map(fn($product) => new ProductToSell(...$product), $products);

        // form the jsonb string for the stored procedure
        $products_json = json_encode($products);

        // call the stored procedure to register the sale

        try {
            DB::statement('CALL registrar_venta(?::jsonb, ?, ?, ?)', [
                $products_json,
                $warehouse_id,
                $payment_method,
                $client_id
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al registrar la venta: '.$e->getMessage(), 'status' => 'error'], 500);
        }


        return response()->json(['message' => 'Venta registrada exitosamente', 'status' => 'success'], 201);

    }
}
