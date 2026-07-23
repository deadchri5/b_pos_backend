<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api: __DIR__.'/../routes/api.php',
        health: '/up',
        then: function (): void {
            Route::prefix('user')
            ->group(__DIR__.'/../routes/User/UserRoutes.php');
            Route::prefix('products')
            ->group(__DIR__.'/../routes/Products/ProductsRoutes.php');
            Route::prefix('categories')
            ->group(__DIR__.'/../routes/Categories/CategoriesRoutes.php');
            Route::prefix('providers')
            ->group(__DIR__.'/../routes/Providers/ProviderRoutes.php');
            Route::prefix('brands')
            ->group(__DIR__.'/../routes/Brands/BrandsRoutes.php');
            Route::prefix('business')
            ->group(__DIR__.'/../routes/Business/BusinessRoutes.php');
            Route::prefix('warehouse')
            ->group(__DIR__.'/../routes/Warehouse/WarehouseRoutes.php');
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->statefulApi();
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
