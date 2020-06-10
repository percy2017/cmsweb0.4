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
// Routes  Caert -----------------------------------------------------------------------
Route::get('ajax/cart/{slug}', 'BimgoController@addcart')->name('bg_ajax_addcart');
Route::get('ajax/remove/{slug}', 'BimgoController@removecart')->name('bg_ajax_removecart');
Route::get('ajax/product_details/{id}', 'BimgoController@productdetails')->name('bg_ajax_product_details');

// Routes  Ecommerce1 -----------------------------------------------------------------------
Route::get('product/{slug}', 'Ecommerce1Controller@product_details')->name('bg_product');
Route::get('my/category', 'Ecommerce1Controller@category')->name('bg_category');
Route::get('my/cart', 'Ecommerce1Controller@cart')->name('bg_cart');
Route::get('my/payment', 'Ecommerce1Controller@payment')->name('bg_payment');
Route::get('my/televenta', 'Ecommerce1Controller@televenta')->name('bg_tv');

// Routes  Ecommerce3 -----------------------------------------------------------------------
Route::get('product3/{slug}', 'Ecommerce3Controller@product_details')->name('bg_product3');
Route::get('my/category3', 'Ecommerce3Controller@category')->name('bg_category3');
Route::get('my/cart3', 'Ecommerce3Controller@cart')->name('bg_cart3');
Route::get('my/payment3', 'Ecommerce3Controller@payment')->name('bg_payment3');
Route::get('my/televenta3', 'Ecommerce3Controller@televenta')->name('bg_tv3');

Route::group(['prefix' => 'admin'], function () {
    Route::post('bimgo/search', 'BimgoController@search')->name('bg_search');
    Route::get('bimgo/relationship/{id}/{table}/{key}/{type}', 'BimgoController@relationship')->name('bg_relationship');
    Route::get('bimgo/view/{table}/{id}', 'BimgoController@view')->name('bg_view');
    Route::get('bimgo/deletes/recovery/{table}/{id}', 'BimgoController@recovery')->name('bg_recovery');
    Route::get('bimgo/deletes/{table}', 'BimgoController@deletes')->name('bg_deletes');

    Route::post('bimgo/update_image', 'ProductController@main_image')->name('update_image');    
});

