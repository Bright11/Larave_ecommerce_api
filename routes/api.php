<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
our first resource
Route::Resource('/product','App\Http\Controllers\ProductController');
*/
//After creating each route, we should run
//php artisan route:list
Route::apiResource('/product','App\Http\Controllers\ProductController');
Route::apiResource('/{product}/reviews','App\Http\Controllers\ReviewController');
