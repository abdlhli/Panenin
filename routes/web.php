<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\PrivacyPolicyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;

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

// Membuat dan Menampilkan route view landing page
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/produk', [ProdukController::class, 'getAllProdukForProdukList'])->name('produk');


// Route untuk Login dan logout
Route::get('/login', [AuthController::class, 'LoginPage'])->name('login');

Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Mendapatkan route fungsi query
Route::post('/login', [AuthController::class, 'login']);
Route::post('/tambahProduk', [ProdukController::class, 'store']);
Route::post('/tmbadmin', [AdminController::class, 'inputAdmin']);
Route::post('/tambahBanner', [BannerController::class, 'inputBanner']);
Route::post('/tambahJenisProduk', [JenisProdukController::class, 'tambahJenisProduk']);
Route::post('/update-account', [SettingsController::class, 'update'])->name('update-account');

Route::put('/akun/update/{id}', [AdminController::class, 'update'])->name('akun.update');
Route::put('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
Route::put('/pemesanan/{id}', [PemesananController::class, 'updateStatus'])->name('pemesanan.update');
Route::put('/banners/{id}', [BannerController::class, 'updateBanner'])->name('banners.update');

Route::delete('/user/hapus/{id_user}', [UserController::class, 'hapus'])->name('user.hapus');
Route::delete('/produk/{produk}', [ProdukController::class, 'hapus'])->name('produk.hapus');
Route::delete('/admin/hapus/{id_user}', [AdminController::class, 'hapus'])->name('admin.hapus');
Route::delete('/banners/{id_banner}', [BannerController::class, 'destroy'])->name('banners.destroy');
Route::delete('/jenisproduk/hapus/{id_jenis_produk}', [JenisProdukController::class, 'hapus'])->name('jenisproduk.hapus');

// Route untuk tampilan View Admin
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('product-management', function () {
        return view('admin.product-management');
    })->name('product-management');

    Route::get('jenis-product', function () {
        return view('admin.jenis-product');
    })->name('jenis-product');

    Route::get('akun-admin', function () {
        return view('admin.akun-admin');
    })->name('akun-admin');

    Route::get('akun-pelanggan', function () {
        return view('admin.akun-pelanggan');
    })->name('akun-pelanggan');

    Route::get('report', function () {
        return view('admin.report');
    })->name('report');

    Route::get('banner', function () {
        return view('admin.banner');
    })->name('banner');

    Route::get('settings', function () {
        return view('admin.settings');
    })->name('settings');

    Route::get('pemesanan', function () {
        return view('admin.pemesanan');
    })->name('pemesanan');
});

Route::get('/termscondition', [TermsConditionController::class, 'bodrex'])->name('termscondition');
Route::get('/privacypolicy', [PrivacyPolicyController::class, 'trex'])->name('privacypolicy');
