<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Business\SellOrder;

// Ruta para generar venta

Route::post('/sell', [SellOrder::class, 'sell']);