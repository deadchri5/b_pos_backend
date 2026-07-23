<?php

namespace App\Http\Services\Product;

use App\Models\Products\Product as ProductModel;
use App\Models\Categories\Categories;
use App\Models\Warehouse\Warehouse;

use App\Http\Dtos\Products\CreateProductDto;

class CrearProductoService
{
    /**
     * Servicio para crear un nuevo producto
     * @param CreateProductDto $productDto - DTO con la información del producto a crear
     * @return int|null - Retorna el ID del producto creado o null si hubo un error
     */
    public static function crearProducto(CreateProductDto &$productDto)
    {

        $codigo = Categories::find($productDto->category);

        if (!$codigo) {
            return null;
        }

        // get department code
        $dep = $codigo->department;

        if (!$dep) {
            return null;
        }

        // los skus tienen el formato: $codigo-xxxxx donde xxxx es un número incremental para cada producto dentro de la misma categoría
        $ultimoProducto = ProductModel::where('sku', 'like', $dep->code . '-%')->orderBy('id', 'desc')->first();
        
        $ultimoNumero = 0;
        if ($ultimoProducto) {
            $ultimoSku = $ultimoProducto->sku;
            $ultimoNumero = intval(substr($ultimoSku, strlen($dep->code) + 1));
        }

        $nuevoNumero = $ultimoNumero + 1;
        $nuevoSku = $dep->code . '-' . str_pad($nuevoNumero, 4, '0', STR_PAD_LEFT);

        // Crear el producto en la base de datos
        ProductModel::create([
            'status' => 'AC',
            'sku' => $nuevoSku,
            'name' => $productDto->name,
            'description' => $productDto->desc,
            'price' => $productDto->price,
            'upc' => $productDto->upc,
            'provider_id' => $productDto->provider,
            'image_url' => null,
            'category_id' => $productDto->category,
            'brand_id' => $productDto->brand,
            'unit_id' => $productDto->unit,
        ]);

        // get prod id
        $producto = ProductModel::where('sku', $nuevoSku)->first();

        if (!$producto) {
            return null;
        }

        // unit code 
        $unit_code = $producto->unit->code;

        // add the stock for the product in user predilected warehouse

        $warehouse = Warehouse::first(); // implementar lógica para obtener el almacén predilecto del usuario
        if (!$warehouse) {
            return null;
        }

        $warehouse->stocks()->create([
            'product_id' => $producto->id,
            'current_stock' => $productDto->stock,
            'unit_type' => $unit_code,
            'last_updated' => now(),
        ]);


        return (int)$producto->id;

    }
}