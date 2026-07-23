<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\GetProducts;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\Images;

Route::get('/', [GetProducts::class, 'getProducts']);

Route::get('/details/{sku}', [GetProducts::class, 'getProduct']);

Route::get('/units', [GetProducts::class, 'getUnits']);

/**
 * Ruta para crear producto
 */
Route::post('/create', [ProductController::class, 'createProduct']);

/**
 * Ruta para actualizar producto
 */
Route::put('/update', [ProductController::class, 'updateProduct']);

/**
 * Ruta para cambiar de estado un producto (activar/desactivar)
 */
Route::patch('/change-status', [ProductController::class, 'changeStatus']);

/**
 * Ruta para subir imagen de producto
 */
Route::post('/upload-image', [Images::class, 'uploadImage']);

/**
 * Ruta para eliminar imagen de producto
 */
Route::delete('/delete-image', [Images::class, 'deleteImage']);

Route::post('/add-department', [ProductController::class, 'addDepartment']);
