<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
Route::post('/login', [AuthController::class, 'loginMobile']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
