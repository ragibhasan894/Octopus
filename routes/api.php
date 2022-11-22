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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-items', [\App\Http\Controllers\ApiController::class, 'getItems']);
Route::get('/get-item/{id}', [\App\Http\Controllers\ApiController::class, 'getItem']);
Route::put('/update-items/{id}', [\App\Http\Controllers\ApiController::class, 'updateItems']);
