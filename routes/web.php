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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::view('/account','account');
//Route::view('/shop','shop');
//Route::view('/login-signup','auth.login_signup');
//Route::view('/cart','cart');
//Route::view('/checkout','checkout');
//Route::view('product-details','product_details');

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
//Route::view('/admin','admin.index');
//Route::view('/admin/new-product','admin.new_product');
//Route::view('/admin/new-user','admin.new_user');
//Route::view('/admin/orders','admin.orders');
//Route::view('/admin/products','admin.product');
//Route::view('/admin/users','admin.users');
//Route::view('/admin/users/edit','admin.edit_user');
//Route::view('/admin/products/edit','admin.edit_product');
//Route::view('/admin/orders/details','admin.invoice');

\Illuminate\Support\Facades\Route::view('login','auth.login_signup');

\Illuminate\Support\Facades\Route::group(["middleware" => "role:user"], function (){
    \Illuminate\Support\Facades\Route::view('/','welcome');
    \Illuminate\Support\Facades\Route::view('account','account');
    \Illuminate\Support\Facades\Route::view('shop','shop');
    \Illuminate\Support\Facades\Route::view('cart','cart');
    \Illuminate\Support\Facades\Route::view('checkout','checkout');
    \Illuminate\Support\Facades\Route::view('product-details','product_details');
});

\Illuminate\Support\Facades\Route::group(["middleware" => "role:admin", "prefix" => "admin"], function (){
    \Illuminate\Support\Facades\Route::view('dashboard','admin.index');
});
