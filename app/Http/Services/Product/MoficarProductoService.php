<?php

namespace App\Http\Services\Product;

use App\Models\Products\Product as ProductModel;

class MoficarProductoService
{
    /**
     * Servicio para cambiar el estado de un producto (activar/desactivar)
     * @param string $product_sku - SKU del producto a modificar
     * @param string $new_status - Nuevo estado del producto (AC para activo, IN para inactivo)
     * @return bool - Retorna true si el cambio fue exitoso, false si hubo un error
     */
    public static function cambiarEstadoProducto(string $product_sku, string $new_status): bool
    {
        $product = ProductModel::where('sku', $product_sku)->first();

        if (!$product) {
            return false;
        }

        $product->status = $new_status;
        return $product->save();
    }

    /**
     * Servicio para actualizar un producto
     * @param array $product_data - Datos del producto a actualizar
     * @return bool - Retorna true si la actualización fue exitosa, false si hubo un error
     */
    public static function actualizarProducto(array $product_data): bool
    {
        $product = ProductModel::where('sku', $product_data['sku'])->first();

        if (!$product) {
            return false;
        }

        // Actualizar los campos del producto con los datos proporcionados
        $product->name = $product_data['name'] ?? $product->name;
        $product->description = $product_data['description'] ?? $product->description;
        $product->price = $product_data['price'] ?? $product->price;
        $product->upc = $product_data['upc'] ?? $product->upc;
        $product->provider_id = $product_data['provider_id'] ?? $product->provider_id;
        $product->brand_id = $product_data['brand_id'] ?? $product->brand_id;
        $product->unit_id = $product_data['unit_id'] ?? $product->unit_id;
        // Agregar más campos según sea necesario

        return $product->save();
    }
}
