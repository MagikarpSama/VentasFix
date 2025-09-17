<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController as ApiUserController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Api\ClientController as ApiClientController;
use Illuminate\Http\Request;

// Autenticación API
Route::post('login', [App\Http\Controllers\AuthController::class, 'apiLogin']);
Route::post('users', [ApiUserController::class, 'store']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('users', [ApiUserController::class, 'index']);
    Route::get('users/{user}', [ApiUserController::class, 'show']);
    Route::put('users/{user}', [ApiUserController::class, 'update']);
    Route::delete('users/{user}', [ApiUserController::class, 'destroy']);
    Route::apiResource('products', ApiProductController::class);
    Route::apiResource('clients', ApiClientController::class);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'apiLogout']);
});
