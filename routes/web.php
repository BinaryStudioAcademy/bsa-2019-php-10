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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('items/add', 'WebController@addProductForm')->name('add');

Route::get('items/{id}', 'WebController@showProduct')->name('show');

Route::get('/{items?}', 'WebController@showMarket')->name('main');

Route::post('items', 'WebController@storeProduct')->name('store');

Route::post('items/{id}', 'WebController@deleteProduct')->name('delete');
