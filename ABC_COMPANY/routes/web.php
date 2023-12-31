<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;

Route::view('/homme','home2');
Route::get('/homme', [ProductController::class, 'index1'])->name('home2');
Route::post('/filter1', [ProductController::class, 'filterByCategory1'])->name('filterByCategory1');
Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);


Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);
Route::delete('/delete-product/{product_name}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::post('/filter', [ProductController::class, 'filterByCategory'])->name('filterByCategory');

Route::post('/products/show', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
