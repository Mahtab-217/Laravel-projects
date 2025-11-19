<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("products",[ProductsController::class, 'index']);
Route::get("products/add",[ProductsController::class,'add']);
Route::get("products/{id}", [ProductsController::class, 'show']);
Route::get("product/update/{id}", [ProductsController::class, 'update']);
Route::get("product/delete/{id}", [ProductsController::class, 'delete']);