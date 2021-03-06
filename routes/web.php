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

Route::get('/', 'GeneralController@index');
Route::post('/subscription/subscribe', 'GeneralController@subscribe');
Route::post('/subscription/checkout', 'GeneralController@checkout');
Route::get('/subscription/pay', 'GeneralController@pay');
Route::post('/subscription/store', 'GeneralController@store');


