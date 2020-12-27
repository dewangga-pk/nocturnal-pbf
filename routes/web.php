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
Route::view('/account','account');
Route::view('/shop','shop');
Route::view('/login-signup','auth.login_signup');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('product-details','product_details');
//Admin
Route::view('/admin','admin.index');
Route::view('/admin/new-product','admin.new_product');
Route::view('/admin/new-user','admin.new_user');
