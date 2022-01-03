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
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//User
Route::get('/add-user','UserController@add_user');
Route::get('/all-user','UserController@all_user');
Route::get('/edit-user/{user_id}','UserController@edit_user');
Route::get('/delete-user/{user_id}','UserController@delete_user');

Route::get('/active-user/{user_id}','UserController@active_user');
Route::get('/unactive-user/{user_id}','UserController@unactive_user');

Route::post('/save-user','UserController@save_user');
Route::post('/update-user/{user_id}','UserController@update_user');

//Product in shop
Route::get('/category-shop/{category_id}','ProductController@show_product_category');
Route::get('/shop-cate','ShopController@index_2');

//Shop detail
Route::get('/product-detail/{product_id}','ProductController@product_detail');

//Cart
Route::post('/save-cart','CartController@save_cart');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-in-cart/{rowId}','CartController@delete_in_cart');

//Register
Route::get('/register','RegisterController@index');
Route::post('/add-user','RegisterController@add_user');


//Checkout
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/checkout','CheckoutController@index');
Route::post('/save-checkout','CheckoutController@save_checkout');



 