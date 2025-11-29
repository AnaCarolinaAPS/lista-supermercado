<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SupermarketController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('supermarkets', SupermarketController::class);
Route::apiResource('products', ProductController::class);
