<?php

use Illuminate\Support\Facades\Route;

// user controllers
use App\Http\Controllers\User\RegisterUser;
use App\Http\Controllers\User\RetrievePassword;
use App\Http\Controllers\User\ChangePassword;

Route::post('/register', [RegisterUser::class, 'registerUser']);
Route::post('/retrieve-password', [RetrievePassword::class, 'retrievePassword']);
Route::post('/change-password', [ChangePassword::class, 'changePassword']);