<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Brands\GetBrands;

Route::get('/', [GetBrands::class, 'getActiveBrands']);
