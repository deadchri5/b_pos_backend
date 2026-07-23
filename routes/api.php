<?php

use Illuminate\Support\Facades\Route;

// user controllers
use App\Http\Controllers\User\RegisterUser;


Route::group(['prefix' => 'v1/user'], function () {
    Route::post('/register', [RegisterUser::class, 'registerUser']);
});
