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
Route::get('/contact' , 'PageController@contact')->name('contact');
Route::post('/contact' , 'PageController@contactForm');
Route::get('/shop' , 'ShopController@index')->name('shop.index');
Route::get('/shop/product/{id}', 'ShopController@product')->name('shop.product');
Route::get('/search', 'ShopController@search')->name('search');
Route::get('/vendor-search', 'ShopController@vendorSearch')->name('vendor-search');
Route::get('/shop/cart', 'CartController@cart')->name('cart.index');
// Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');
Route::post('/wishlist/store', 'WishlistController@store')->name('wishlist.store');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::get('/shop/checkout' , 'CheckoutController@index')->name('checkout.index');
Route::post('/shop/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');
Route::get('/vendor-dashboard/{id}' , 'VendorController@index')->name('vendor-dashboard');

Auth::routes();
Route::get('/home', 'UserController@index')->name('home');
Route::post('/user/messgae', 'UserController@message')->name('user.message');
