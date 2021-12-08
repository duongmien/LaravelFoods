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

//Frontend
Route::get('/','HomeController@index');

Route::get('/shop','ShopController@index');

Route::get('/home','HomeController@index');

Route::get('/contact','ContactController@index');

//Backend
Route::get('/login','LoginController@index');

Route::get('/admin','AdminController@index');

Route::get('/dashboard','AdminController@show_dashboard');

Route::get('/logout','LoginController@logout');

Route::post('/check-login','LoginController@check_login');

//Category Product

Route::get('/add-category-product','CategoryProduct@add_category_product');

Route::get('/all-category-product','CategoryProduct@all_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
