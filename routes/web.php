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

Route::get('/' , 'PageController@landingPage');
Route::get('/vendor-dashboard' , 'PageController@vendor')->name('vendor-dashboard');
Route::get('/contact' , 'PageController@contact')->name('contact');
Route::get('/shop' , 'ShopController@index')->name('shop');
Route::get('/shop/product' , 'ShopController@product')->name('shop.product');
Route::get('/shop/cart' , 'ShopController@cart')->name('shop.cart');
Route::get('/shop/checkout' , 'ShopController@checkout')->name('shop.checkout');
Route::get('/signup' , function (){
	return view('auth.signup');})->name('user.signup');
Route::get('/login' , function (){
	return view('auth.login');})->name('login');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
