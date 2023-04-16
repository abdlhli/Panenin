<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'RegisterPage'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

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

    Route::get('news', function () {
        return view('admin.news');
    })->name('news');
});


Route::middleware(['auth', 'check.admin'])->group(function () {

    Route::get('akun-admin', function () {
        return view('admin.akun-admin');
    })->name('akun-admin');

    Route::get('akun-pelanggan', function () {
        return view('admin.akun-pelanggan');
    })->name('akun-pelanggan');
});
