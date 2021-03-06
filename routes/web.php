<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterObatController;
use App\Http\Controllers\ObatMasukController;
use App\Http\Controllers\ObatKeluarController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('auth.loginView');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/signin', [AuthController::class, 'signIn'])->name('signIn');
    Route::get('/signOut', [AuthController::class, 'signOut'])->name('signOut');
});

Route::group(['middleware' => 'isLoggedin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboardView');
    Route::get('/obatmasuk', [ObatMasukController::class, 'view'])->name('obatmasukView');
    Route::post('/obatmasuk/addtocart', [ObatMasukController::class, 'addToCart'])->name('addToCart');
    Route::get('/obatmasuk/emptyCart', [ObatMasukController::class, 'emptyCart'])->name('emptyCart');
    Route::get('/obatmasuk/deleteSingleDataInCart', [ObatMasukController::class, 'deleteSingleDataInCart'])->name('deleteSingleDataInCart');
    Route::get('/obatkeluar', [ObatKeluarController::class, 'view'])->name('obatkeluarView');
    Route::get('/laporan', [LaporanController::class, 'view'])->name('laporanView');
    Route::get('/masterobat', [MasterObatController::class, 'view'])->name('masterobatView');
});

Route::group(['as' => 'api.'], function () {
    Route::post('/obatmasuk/storeData', [ObatMasukController::class, 'storeData'])->name('obatMasukStoreData');
});

Route::get('/genPass', function () {
    return Hash::make('admin');
});

// Route::post('/testovo', [DashboardController::class, 'ovoConnect']);