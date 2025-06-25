<?php

use App\Http\Controllers\Api\V1\ServiceCategoryController;
use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\VendorController;
use App\Http\Controllers\Api\V1\ServiceImageController;
use App\Http\Controllers\Api\V1\GuideTypeController;
use App\Http\Controllers\Api\V1\GuideController;
use App\Http\Controllers\Api\V1\FavoriteController;
use App\Http\Controllers\Api\V1\ServiceCategoryVendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API v1 routes
Route::prefix('v1')->group(function () {
    Route::apiResource('vendors', VendorController::class);
    Route::apiResource('service-categories', ServiceCategoryController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('service-images', ServiceImageController::class);
    Route::apiResource('guide-types', GuideTypeController::class);
    Route::apiResource('guides', GuideController::class);
    Route::apiResource('favorites', FavoriteController::class)->only(['index', 'store', 'destroy']);
    Route::apiResource('service-category-vendor', ServiceCategoryVendorController::class)->only(['index', 'store', 'destroy']);
});
