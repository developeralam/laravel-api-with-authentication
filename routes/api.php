<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DummyAPI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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

Route::get('/data', [DummyAPI::class, 'getData']);
Route::get('/device/{id?}', [DeviceController::class, 'list']);
Route::get('/device/{id}', [DeviceController::class, 'list']);
Route::post('/store', [DeviceController::class, 'store']);
