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

Route::group(['prefix' => 'admin'], function () {
    Route::post('histream/search', 'WebstreamingController@search')->name('hs_earch');
    Route::get('histream/relationship/{id}/{table}/{key}/{type}', 'WebstreamingController@relationship')->name('hs_relationship');
    Route::get('histream/view/{table}/{id}', 'WebstreamingController@view')->name('hs_view');
    Route::get('histream/deletes/recovery/{table}/{id}', 'WebstreamingController@recovery')->name('hs_recovery');
    Route::get('histream/deletes/{table}', 'WebstreamingController@deletes')->name('hs_deletes');
});
    
// Conferecias
Route::resource('admin/conferencias', 'MeetingsController')->middleware('auth');
Route::get('admin/conferencias/list/{search}', 'MeetingsController@list')->middleware('auth');
Route::get('admin/conferencias/suscribes/list/{meeting_id}', 'MeetingsController@suscribes_list')->middleware('auth');
Route::get('conferencia/{slug}/{error?}', 'MeetingsController@join');
Route::get('conferencia/join/{type}/{id}/{quantity?}', 'MeetingsController@joined');
Route::post('conferencia/suscribe', 'MeetingsController@suscribe')->name('conferencia.suscribe');
Route::get('conferencia/suscribe/{meet_id}/{suscribe_id}/{type}', 'MeetingsController@suscribe_join');

// suscripciones
Route::resource('admin/suscripciones', 'SuscriptionsController')->middleware('auth');
Route::get('admin/suscripciones/list/{search}', 'SuscriptionsController@list')->middleware('auth');
Route::post('admin/suscripciones/user/peticion', 'SuscriptionsController@petition')->middleware('auth')->name('user_petition');
Route::post('admin/suscripciones/user/edit', 'SuscriptionsController@update_user')->middleware('auth')->name('user_edit');

Route::get('admin/suscripciones/meetings/{user_id}', 'SuscriptionsController@meetings_user')->middleware('auth');
Route::get('admin/suscripciones/meetings/{user_id}/list/{search}', 'SuscriptionsController@meetings_user_list')->middleware('auth');

Route::get('register/{id}', function($id){
    session(['plan_id' => $id]);
    return redirect('/register');
});
