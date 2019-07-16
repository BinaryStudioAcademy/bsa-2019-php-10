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

Route::get('items/add', 'MarketWebController@addProductForm')->name('add');

Route::get('items/{id}', 'MarketWebController@showProduct')->name('show');

Route::get('/{items?}', 'MarketWebController@showMarket')->name('main');

Route::post('items', 'MarketWebController@storeProduct')->name('store');

Route::post('items/{id}', 'MarketWebController@deleteProduct')->name('delete');
