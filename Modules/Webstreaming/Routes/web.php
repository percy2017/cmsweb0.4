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

Route::prefix('webstreaming')->group(function() {
    Route::get('/', 'WebstreamingController@index');
});

// Conferecias
Route::resource('admin/conferencias', 'MeetingsController')->middleware('auth');
Route::get('meet/{slug}', 'MeetingsController@join');

// suscripciones
Route::resource('admin/suscripciones', 'SuscriptionsController')->middleware('auth');
Route::get('admin/suscripciones/list/{search}', 'SuscriptionsController@list')->middleware('auth');

Route::get('register/{id}', function($id){
    session(['plan_id' => $id]);
    return redirect('/register');
});
