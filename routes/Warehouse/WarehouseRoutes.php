<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Warehouse\Stock;

Route::get('/', [Stock::class, 'getInventory']);

Route::get('/warehouses', [Stock::class, 'getWarehouses']);

Route::get('/inventory/{sku}/{warehouse_id}', [Stock::class, 'getInventoryBySku']);