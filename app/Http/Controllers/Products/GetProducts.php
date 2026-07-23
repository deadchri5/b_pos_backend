<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Units\Units;
use App\Models\Products\Product;
use App\Models\Brand;

class GetProducts extends Controller
{
    public function getProducts(Request $request)
    {
        $relations = [];
        if ($request->query('images')) {
            $relations[] = 'images';
        }
        if ($request->query('category')) {
            $relations[] = 'category';
        }
        if ($request->query('brand')) {
            $relations[] = 'brand';
        }
        if ($request->query('unit')) {
            $relations[] = 'unit';
        }
        if ($request->query('stock')) {
            $relations[] = 'stocks';
        }

        // Aquí puedes implementar la lógica para obtener los productos desde tu base de datos
        $products = Product::where('status', 'AC')
            ->with($relations)
            ->when($request->query('stock'), function ($query) {
                $query->whereHas('stocks', function ($query) {
                    $query->where('warehouse_id', 1); // implementar lógica para obtener el almacén predilecto del usuario
                    $query->where('current_stock', '>', 0);
                });
            })
            ->get();

        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found'], 404);
        }

        // put url prefix to image urls
        foreach ($products as $product) {
            foreach ($product->images as $image) {
                $image->image_url = env('AWS_URL_BUCKET') . '/' . $image->image_url;
            }
        }

        // Por ahora, devolveremos una respuesta de ejemplo
        return response()->json([
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);
    }

    /**
     * Obtener productos por ID
     * @param string $sku
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduct(string $sku)
    {
        $product = Product::with(['images', 'category', 'brand', 'unit', 'stocks'])
            ->where('sku', $sku)
            ->where('status', 'AC')
            ->first();

        if (!$product) {
            return response()->json(['message' => 'Product not found: ' . $sku], 404);
        }

        // put url prefix to image urls
        foreach ($product->images as $image) {
            $image->image_url = env('AWS_URL_BUCKET') . '/' . $image->image_url;
        }

        return response()->json([
            'message' => 'Product retrieved successfully',
            'data' => $product
        ]);
    }

    public function getUnits()
    {
        // Aquí puedes implementar la lógica para obtener las unidades de los productos desde tu base de datos
        $units = Units::where('is_active', true)->get();

        if ($units->isEmpty()) {
            return response()->json(['message' => 'No units found'], 404);
        }

        // Por ahora, devolveremos una respuesta de ejemplo
        return response()->json([
            'message' => 'Units retrieved successfully',
            'data' => $units
        ]);
    }

}
