<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\InventoryController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth.basic')->get('/user' , function (Request $request){
    return $request->user();
});
Route::apiResource('inventories', InventoryController::class);
