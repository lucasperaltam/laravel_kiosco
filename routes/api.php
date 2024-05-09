<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/categorias', [CategoriaController::class, 'index'])->name('index');
Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/productos', ProductoController::class);