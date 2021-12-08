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

    // Products
    Route::get('/compare', 'Customer\ProductController@compare')->name('products.compare')->middleware(['auth']);
    Route::get('/addToCart/{product}', 'Customer\ProductController@addToCart')->name('products.addToCart');
    Route::get('/removeFromCart/{id}', 'Customer\ProductController@removeFromCart')->name('products.removeFromCart');
    Route::get('/emptyCart', 'Customer\ProductController@emptyCart')->name('products.emptyCart');
    Route::resource('/products', 'Customer\ProductController');
    
    // Orders
    Route::get('/checkout', 'Customer\OrderController@checkout')->name('orders.checkout');
    Route::get('/checkout/submit', 'Customer\OrderController@checkoutSubmit')->name('orders.checkout.submit')->middleware(['auth']);    
    Route::get('/orders/history', 'Customer\OrderController@history')->name('orders.history')->middleware(['auth']);
    Route::get('/orders/historydetail/{order}', 'Customer\OrderController@historydetail')->name('orders.historydetail')->middleware(['auth']);
});

Route::group(['prefix' => 'admins', 'as' => 'admins.', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('index');

    // Brands
    Route::post('/brands/updateInline', 'Admin\BrandController@updateInline')->name('brands.updateInline');
    Route::post('/brands/destroyNoReload', 'Admin\BrandController@destroyNoReload')->name('brands.destroyNoReload');
    Route::post('/brands/changeImage', 'Admin\BrandController@changeImage')->name('brands.changeImage');
    Route::resource('/brands', 'Admin\BrandController');

    // Products
    Route::post('/products/destroyImageProduct', 'Admin\ImageProductController@destroyImageProduct')->name('products.destroyImageProduct');
    Route::post('/products/addImageProduct', 'Admin\ImageProductController@addImageProduct')->name('products.addImageProduct');
    Route::post('/products/destroyNoReload', 'Admin\ProductController@destroyNoReload')->name('products.destroyNoReload');
    Route::resource('/products', 'Admin\ProductController');

    // Categories
    Route::post('/categories/updateInline', 'Admin\CategoryController@updateInline')->name('categories.updateInline');
    Route::post('/categories/destroyNoReload', 'Admin\CategoryController@destroyNoReload')->name('categories.destroyNoReload');
    Route::resource('/categories', 'Admin\CategoryController');

    // Orders
    Route::get('/orders/{order}/read', 'Admin\OrderController@read')->name('orders.read');
    Route::post('/orders/getWaitingCount', 'Admin\OrderController@getWaitingCount')->name('orders.getWaitingCount');
    Route::post('/orders/changeStatus', 'Admin\OrderController@changeStatus')->name('orders.changeStatus');
    Route::post('/orders/destroyNoReload', 'Admin\OrderController@destroyNoReload')->name('orders.destroyNoReload');
    Route::resource('/orders', 'Admin\OrderController');

    // Users
    Route::post('/users/updateInline', 'Admin\UserController@updateInline')->name('users.updateInline');
    Route::post('/users/changeUserStatus', 'Admin\UserController@changeUserStatus')->name('users.changeUserStatus');
    Route::resource('/users', 'Admin\UserController');
});
{{  }}