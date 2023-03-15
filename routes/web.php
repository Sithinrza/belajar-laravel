<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register_proses',[RegisterController::class,'register_proses']);
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login_proses',[loginController::class,'login_proses']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/products', ProductController::class)->middleware('auth');
Route::post('/logout', [LoginController::class, 'index']);
