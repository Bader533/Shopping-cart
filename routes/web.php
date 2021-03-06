<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/store', 'HomeController@store')->name('store');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart');
Route::get('/shopping-cart', 'ProductController@showcart')->name('showcart');
Route::get('/checkout/{amount}', 'ProductController@checkout')->name('checkout'); 
Route::post('/charge', 'ProductController@charge')->name('charge'); 

