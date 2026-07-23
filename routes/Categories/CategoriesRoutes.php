<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Categories\GetCategories;


Route::get('/', [GetCategories::class, 'getCategories']);