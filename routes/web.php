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

Route::get('/', 'FrontEndController@default')->name('page_default');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{social}', 'SocialiteController@redirectToProvider')->name('socialLogin');
Route::get('login/{social}/callback', 'SocialiteController@handleProviderCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{slug}', 'FrontEndController@pages')->name('pages');

