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
Route::get('ajax/cart/{slug}', 'Ecommerce1Controller@addcart')->name('bg_ajax_addcart');
Route::get('ajax/remove/{slug}', 'Ecommerce1Controller@removecart')->name('bg_ajax_removecart');
Route::get('ajax/product_details/{id}', 'Ecommerce1Controller@productdetails')->name('bg_ajax_product_details');

Route::get('product1/{slug}', 'Ecommerce1Controller@product_details')->name('bg_product');
Route::get('product/{slug}', 'Ecommerce2Controller@product_details')->name('bg_view2');
Route::get('my/cart', 'Ecommerce1Controller@cart')->name('bg_cart');
Route::get('my/payment', 'Ecommerce1Controller@payment')->name('bg_payment');
Route::get('my/televenta', 'Ecommerce1Controller@televenta')->name('bg_tv');


Route::group(['prefix' => 'admin'], function () {
    Route::post('bimgo/search', 'BimgoController@search')->name('bg_search');
    Route::get('bimgo/relationship/{id}/{table}/{key}/{type}', 'BimgoController@relationship')->name('bg_relationship');
    Route::get('bimgo/view/{table}/{id}', 'BimgoController@view')->name('bg_view');
    Route::get('bimgo/deletes/recovery/{table}/{id}', 'BimgoController@recovery')->name('bg_recovery');
    Route::get('bimgo/deletes/{table}', 'BimgoController@deletes')->name('bg_deletes');

    Route::post('bimgo/update_image', 'ProductController@main_image')->name('update_image');

    
});

