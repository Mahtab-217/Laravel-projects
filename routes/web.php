<?php
use App\Http\Controllers\Students;
use App\Http\Controllers\StudentsController;
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
Route::get("addData",[StudentsController::class, 'addData']);
Route::get("fetchData",[StudentsController::class, 'fetchData']);
Route::get("update", [StudentsController::class,'update']);
Route::get("delete", [StudentsController::class,'delete']);