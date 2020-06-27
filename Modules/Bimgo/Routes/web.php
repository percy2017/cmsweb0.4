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
// Routes  Profile y Login -----------------------------------------------------------------------
Route::get('my/profile', 'BimgoController@profile')->name('bg_profile');

// Routes  Cart -----------------------------------------------------------------------
Route::get('ajax/cart/{slug}/{detail}', 'BimgoController@addcart')->name('bg_ajax_addcart');
Route::get('ajax/subtract/{slug}/{detail}', 'BimgoController@subtractcart')->name('bg_ajax_subtractcart');
Route::get('ajax/remove/{slug}/{detail}', 'BimgoController@removecart')->name('bg_ajax_removecart');
Route::get('ajax/product_details/{id}', 'BimgoController@productdetails')->name('bg_ajax_product_details');
Route::post('ajax/update/bussiness', 'BimgoController@update_bussiness')->name('bg_ajax_update_bussiness');
Route::post('/save/location', 'BimgoController@save_location')->name('bg_save_location');
Route::get('ajax/bg_regions/{id}', 'BimgoController@regions_get')->name('bg_ajax_region_get');

// Routes  admin -----------------------------------------------------------------------
Route::get('ajax/admin/welcome', 'Ecommerce1Controller@welcome')->name('bg_ajax_admin_welcome');
Route::get('ajax/admin/register', 'Ecommerce1Controller@register')->name('bg_ajax_admin_register');


// Routes  Ecommerce1 -----------------------------------------------------------------------
Route::get('product/{slug}', 'Ecommerce1Controller@product_details')->name('bg_product');
Route::get('my/category', 'Ecommerce1Controller@category')->name('bg_category');
Route::get('my/cart', 'Ecommerce1Controller@cart')->name('bg_cart');
Route::get('my/payment', 'Ecommerce1Controller@payment')->name('bg_payment')->middleware('auth');
Route::get('my/televenta', 'Ecommerce1Controller@televenta')->name('bg_tv')->middleware('auth');
Route::get('my/home', 'Ecommerce1Controller@home')->name('bg_home')->middleware('auth');
Route::get('my/admin', 'Ecommerce1Controller@admin')->name('bg_admin')->middleware('auth');


// Routes  Ecommerce2 -----------------------------------------------------------------------
Route::get('product2/{slug}', 'Ecommerce2Controller@product_details')->name('bg_product2');
Route::get('my/category2', 'Ecommerce2Controller@category')->name('bg_category2');
Route::get('my/cart2', 'Ecommerce2Controller@cart')->name('bg_cart2');
Route::get('my/payment2', 'Ecommerce2Controller@payment')->name('bg_payment2');
Route::get('my/televenta2', 'Ecommerce2Controller@televenta')->name('bg_tv2');

// Routes  Ecommerce3 -----------------------------------------------------------------------
Route::get('product3/{slug}', 'Ecommerce3Controller@product_details')->name('bg_product3');
Route::get('my/category3', 'Ecommerce3Controller@category')->name('bg_category3');
Route::get('my/cart3', 'Ecommerce3Controller@cart')->name('bg_cart3');
Route::get('my/payment3', 'Ecommerce3Controller@payment')->name('bg_payment3');
Route::get('my/televenta3', 'Ecommerce3Controller@televenta')->name('bg_tv3');

// Routes  Ecommerce4 -----------------------------------------------------------------------
Route::get('product4/{slug}', 'Ecommerce4Controller@product_details')->name('bg_product4');
Route::get('my/category4', 'Ecommerce4Controller@category')->name('bg_category4');
Route::get('my/cart4', 'Ecommerce4Controller@cart')->name('bg_cart4');
Route::get('my/payment4', 'Ecommerce4Controller@payment')->name('bg_payment4');
Route::get('my/televenta4', 'Ecommerce4Controller@televenta')->name('bg_tv4');

Route::group(['prefix' => 'admin'], function () {
    Route::post('bimgo/search', 'BimgoController@search')->name('bg_search');
    Route::get('bimgo/relationship/{id}/{table}/{key}/{type}', 'BimgoController@relationship')->name('bg_relationship');
    Route::get('bimgo/view/{table}/{id}', 'BimgoController@view')->name('bg_view');
    Route::get('bimgo/deletes/recovery/{table}/{id}', 'BimgoController@recovery')->name('bg_recovery');
    Route::get('bimgo/deletes/{table}', 'BimgoController@deletes')->name('bg_deletes');

    Route::post('bimgo/update_image', 'ProductController@main_image')->name('update_image');    
});

