<?php

use App\Http\Controllers\Api\StoreApiController;
use App\Http\Controllers\Api\UserAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post('login', [UserAuthenticationController::class, 'login']);

Route::get('stores', [StoreApiController::class, 'getStores']);

Route::middleware('auth.api')->group(function () {
    Route::get('stores/{id}', [StoreApiController::class, 'getStore']);
    Route::post('stores', [StoreApiController::class, 'postStores']);
    Route::put('stores/{id}', [StoreApiController::class, 'putStore']);
    Route::delete('stores/{id}', [StoreApiController::class, 'deleteStore']);
});
