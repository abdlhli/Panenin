<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;


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

// Mendapatkan rute fungsi query
Route::get('/login', [AuthController::class, 'LoginPage'])->name('login');
Route::get('/register', [AuthController::class, 'RegisterPage'])->name('register');


Route::post('/update-account', [SettingsController::class, 'update'])->name('update-account');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/tmbadmin', [AdminController::class, 'inputAdmin']);
Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::delete('/admin/hapus/{id_user}', [AdminController::class, 'hapus'])->name('admin.hapus');


// Membuat dan Menampilkan rute view
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

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
});
