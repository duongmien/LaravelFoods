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

Route::get('/','HomeController@index');

Route::get('/shop','ShopController@index');

Route::get('/home','HomeController@index');

Route::get('/contact','ContactController@index');

Route::get('/login','LoginController@index');

Route::get('/admin','AdminController@index');
