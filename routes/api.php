<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\InventoryController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);
Route::apiResource('inventories', InventoryController::class);
