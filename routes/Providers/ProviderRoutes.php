<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Providers\GetProviders;

Route::get('/', [GetProviders::class, 'getProviders']);