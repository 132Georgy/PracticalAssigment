<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'ControllerMain@main')->name('main');
Route::get('/carmodels', 'ControllerMain@carmodels')->name('carmodels');
Route::get('/{carmodel}', 'ControllerMain@carmodel')->name('carmodel');
Route::get('/{carmodel}/{product?}', 'ControllerMain@product')->name('product');

Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/cart/order', 'CartController@order')->name('order');

Route::get('/cart', 'ControllerMain@cart')->name('cart');
Route::get('/cart/order', 'ControllerMain@order')->name('order');
