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

// Route::middleware(['auth:api'])->group(function () {
//     Route::get('/users', [UserController::class, 'index']);
// });

// Route::middleware('auth:api')->get('/users', [UserController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::post('/login', [AuthController::class, 'login'])->name('login');


