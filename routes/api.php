<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API Health check endpoint for InfinityFree
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API is running',
        'timestamp' => now()->toIso8601String()
    ]);
})->name('api.health');

// API Info endpoint
Route::get('/info', function () {
    return response()->json([
        'app' => config('app.name'),
        'version' => '1.0.0',
        'environment' => app()->environment()
    ]);
})->name('api.info');
