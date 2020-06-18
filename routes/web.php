<?php
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/', 'ControllerMain@main')->name('main');

Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/cart/order', 'CartController@cartplace')->name('cart-place');
Route::post('cart/add/{id}','CartController@cartAdd')->name('cart-add');

Route::get('/carmodels', 'ControllerMain@carmodels')->name('carmodels');


Route::get('/{carmodel}', 'ControllerMain@carmodel')->name('carmodel');
Route::get('/{carmodel}/{product?}', 'ControllerMain@product')->name('product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
