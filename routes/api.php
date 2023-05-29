<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PemesananController;

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

Route::get('/users', [UserController::class, 'getAllUser']);
Route::get('/users/{id}', [UserController::class, 'getUserById']);
Route::get('/produk', [ProdukController::class, 'getAllProduk']);
Route::get('/produk/{id}', [ProdukController::class, 'getProdukById']);
Route::get('/banner', [BannerController::class, 'getAllBanner']);
Route::get('/pemesanan', [PemesananController::class, 'getAllPemesanan']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'getPemesananByIdUser']);
Route::get('/jenisproduk', [JenisProdukController::class, 'getAllJenisProduk']);
Route::get('/produkterlaris', [ProdukController::class, 'getProdukTerlaris']);
Route::get('/produkbyjenis/{id_jenis_produk}', [ProdukController::class, 'getProdukByJenis']);


Route::post('/login', [AuthController::class, 'loginMobile']);
Route::post('/adduser', [UserController::class, 'addUser']);
Route::post('/pemesanan', [PemesananController::class, 'store']);
Route::post('/users/update/{id}', [UserController::class, 'updateUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
