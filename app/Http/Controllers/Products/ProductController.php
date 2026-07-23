<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\CreateProduct;
use Illuminate\Http\Request;

// Dtos
use App\Http\Dtos\Products\CreateProductDto;

// services 
use App\Http\Services\Product\CrearProductoService;
use App\Http\Services\Product\MoficarProductoService;
use App\Http\Services\Departments\CrearDepartamentService;

class ProductController extends Controller
{
    public function createProduct(CreateProduct $request)
    {
        $request_data = $request->validated();
        
        $product_info = CreateProductDto::from($request_data);

        $product = CrearProductoService::crearProducto($product_info);

        if (!$product) {
            return response()->json(['message' => 'Error al crear el producto'], 500);
        }

        return response()->json(['message' => 'Producto creado exitosamente', 'product_id' => $product], 201);

    }


    public function changeStatus(Request $request)
    {
        $product_sku = $request->input('product_sku');
        $new_status = $request->input('new_status');

        if (!$product_sku || !$new_status) {
            return response()->json(['message' => 'Faltan datos requeridos', 'status' => 'error'], 400);
        }

        if (!in_array($new_status, ['AC', 'IN'])) {
            return response()->json(['message' => 'El nuevo estado debe ser AC (activo) o IN (inactivo)', 'status' => 'error'], 400);
        }

        $result = MoficarProductoService::cambiarEstadoProducto($product_sku, $new_status);

        if (!$result) {
            return response()->json(['message' => 'Error al cambiar el estado del producto', 'status' => 'error'], 500);
        }

        return response()->json(['message' => 'Estado del producto cambiado exitosamente', 'status' => 'success'], 200);
    }

    public function updateProduct(Request $request)
    {
        $request_data = $request->all();

        $result = MoficarProductoService::actualizarProducto($request_data);

        return response()->json(['message' => 'Producto actualizado exitosamente', 'status' => $result ? 'success' : 'error'], $result ? 200 : 500);
    }

    public function addDepartment(Request $request)
    {
        $department_name = $request->input('name');
        $department_code = $request->input('code');

        if (!$department_name || !$department_code) {
            return response()->json(['message' => 'Faltan datos requeridos', 'status' => 'error'], 400);
        }

        $result = CrearDepartamentService::crearDepartamento($department_name, $department_code);

        if (!$result) {
            return response()->json(['message' => 'Error al agregar el departamento al producto', 'status' => 'error'], 500);
        }

        return response()->json(['message' => 'Departamento agregado al producto exitosamente', 'status' => 'success'], 200);
    }

}
    