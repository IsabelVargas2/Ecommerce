<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::profix('products')->controller(ProductController::class)->group(function (){
    Route::get('/', 'index' );
    Route::get('/create', 'create');
    Route::get('/{id}/{category?}', 'show');
});

