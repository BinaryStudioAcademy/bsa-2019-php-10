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

Route::get('/', 'WebController@showMarket');

Route::get('items/{id}', 'WebController@showProduct');

Route::get('items/add', 'WebController@addProductForm')->name('add');

Route::post('items', 'WebController@storeProduct')->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
