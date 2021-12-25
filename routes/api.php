<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObatMasukController;
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

Route::group(['as' => 'api.'], function () {
    Route::get('/obatmasuk/checkNomorBatch', [ObatMasukController::class, 'checkNomorBatch'])->name('checkNomorBatch');
});

// Route::post('/testovo', [DashboardController::class, 'ovoConnect']);

