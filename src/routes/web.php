<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
// Auth::routes();
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


Route::get('/',[HomeController::class, 'Index'])->name('home');
Route::get('/about',[HomeController::class, 'About'])->name('about');
Route::get('/contact',[HomeController::class, 'Contact'])->name('contact');
Route::get('/terms',[HomeController::class, 'Contact'])->name('terms');
Route::get('/privacy-policy',[HomeController::class, 'Contact'])->name('privacy-policy');
Route::post('/save-query',[HomeController::class, 'saveQuery'])->name('contact.post');
