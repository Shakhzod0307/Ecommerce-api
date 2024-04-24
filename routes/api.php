<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
Route::post('logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('category.products', CategoryProductController::class);
    Route::apiResource('favorites', FavoritesController::class);
    Route::get('/user',[AuthController::class, 'user']);
});




