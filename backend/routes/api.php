<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/pages/city/{slug}', [CityController::class, 'showBySlug']);
Route::get('/pages/product/{slug}', [ProductController::class, 'showBySlug']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('cities', CityController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('testimonials', TestimonialController::class);

    Route::get('/settings', [SettingsController::class, 'show']);
    Route::put('/settings', [SettingsController::class, 'update']);
});
