<?php

use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\Students;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("products",[ProductsController::class, 'index']);
// Route::get("products/add",[ProductsController::class,'add']);
Route::get("products/{id}", [ProductsController::class, 'show']);
Route::get("product/update/{id}", [ProductsController::class, 'update']);
Route::get("product/delete/{id}", [ProductsController::class, 'delete']);
Route::get("addData",[StudentsController::class, 'addData']);
Route::get("fetchData",[StudentsController::class, 'fetchData']);
Route::get("update", [StudentsController::class,'update']);
// Route::get("delete", [StudentsController::class,'delete']);
Route::get("fetchData",[StudentsController::class,'fetchData']);
Route::get("first",[StudentsController::class,'first']);
Route::get("second",[StudentsController::class,'second']);
Route::get("l",[StudentsController::class,'little']);
Route::get("y",[StudentsController::class,'young']);
Route::get("o",[StudentsController::class,'old']);
Route::get("showDeletedData",[StudentsController::class,'showDeletedData']);
Route::get("restoreData",[StudentsController::class,'restoreData']);
Route::get("new",[StudentsController::class,'putData']);
Route::prefix('student')->controller(StudentsController::class)->group(function(){
Route::get('/','fetchStudent');
Route::view('add','Students.add');
Route::post('create','create');
Route::get("update/{id}",'update');
Route::put('edit/{id}', 'Edit');
Route::delete('delete/{id}','Destroy');
});
Route::prefix('songs')->controller(SongsController::class)->group(function(){
Route::view('/add','Song.Insert');
Route::get('/','index');
Route::post('insert','Create');
Route::delete('delete/{id}','Destroy');
});
Route::get('developer', [DevelopersController::class, 'create' ]);

