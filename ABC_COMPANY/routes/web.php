<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
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
Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
//Route::view('home','home')->middleware('auth');
//Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);


Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::post('/filter', [ProductController::class, 'filterByCategory'])->name('filterByCategory');
