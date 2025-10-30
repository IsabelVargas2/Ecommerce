<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class], index );


Route::prefix('products')->controller(ProductController::class)->group(function (){
    Route::get('/', 'index' );
    Route::get('/create', 'create');
    Route::get('/{id}/{category?}', 'show');
});

Auth::routes();