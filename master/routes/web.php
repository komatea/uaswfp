<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['as' => 'customers.'], function () {
    Route::get('/', 'Customer\HomeController@index')->name('index');
    Route::resource('/products', 'Customer\ProductController');
    // Route::view('/products/show','customers.products.show')->name('products.show');
    Route::view('/compare','customers.products.compare')->name('products.compare');
    Route::view('/checkout','customers.orders.checkout')->name('orders.checkout');
    Route::get('/cart', function () {
        return view('customers.orders.cart');
    });
    // Route::resource('/transactions', 'Customer\TransactionController');
});
// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admins', 'as' => 'admins.'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('index');

    // Brands
    Route::post('/brands/updateInline', 'Admin\BrandController@updateInline')->name('brands.updateInline');
    Route::post('/brands/destroyNoReload','Admin\BrandController@destroyNoReload')->name('brands.destroyNoReload');
    Route::post('/brands/changeImage','Admin\BrandController@changeImage')->name('brands.changeImage');
    Route::resource('/brands','Admin\BrandController');

    // Products
    Route::post('/products/destroyImageProduct','Admin\ImageProductController@destroyImageProduct')->name('products.destroyImageProduct');
    Route::post('/products/addImageProduct','Admin\ImageProductController@addImageProduct')->name('products.addImageProduct');
    Route::post('/products/destroyNoReload','Admin\ProductController@destroyNoReload')->name('products.destroyNoReload');
    Route::resource('/products','Admin\ProductController');
    
    // Categories
    Route::post('/categories/updateInline','Admin\CategoryController@updateInline')->name('categories.updateInline');
    Route::post('/categories/destroyNoReload','Admin\CategoryController@destroyNoReload')->name('categories.destroyNoReload');
    Route::resource('/categories','Admin\CategoryController');
    
    // Orders
    Route::get('/orders/{order}/read','Admin\OrderController@read')->name('orders.read');
    Route::post('/orders/getWaitingCount','Admin\OrderController@getWaitingCount')->name('orders.getWaitingCount');
    Route::post('/orders/changeStatus','Admin\OrderController@changeStatus')->name('orders.changeStatus');
    Route::post('/orders/destroyNoReload','Admin\OrderController@destroyNoReload')->name('orders.destroyNoReload');
    Route::resource('/orders','Admin\OrderController');
    
    // Users
    Route::post('/users/updateInline','Admin\UserController@updateInline')->name('users.updateInline');
    Route::post('/users/changeUserStatus','Admin\UserController@changeUserStatus')->name('users.changeUserStatus');
    Route::resource('/users','Admin\UserController');
});