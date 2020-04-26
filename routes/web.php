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

    Route::get('{page_id}/edit', 'PageController@edit')->name('page_edit'); 
    Route::post('/page/{page_id}/update', 'PageController@update')->name('page_update');
    Route::get('/page/{page_id}/default', 'PageController@default')->name('page_default'); 


    Route::get('{page_id}/index', 'BlockController@index')->name('block_index'); 
    Route::post('/block/update/{block_id}', 'BlockController@update')->name('block_update');
    Route::get('/block/delete/{block_id}', 'BlockController@delete')->name('block_delete');
    Route::get('/block/move_up/{block_id}', 'BlockController@move_up')->name('block_move_up'); 
    Route::get('/block/move_down/{block_id}', 'BlockController@move_down')->name('block_move_down');
});
Route::get('{module_name}/installer', function($module_id) {
    $module=App\Module::where('id', $module_id)->first();
    $module_name=$module->name;

    switch ($module->name) {
        case 'Inti v1.0':
            $module_name = 'Inti';
            break;
        case 'hiStream v1.0':
            $module_name = 'Webstreaming';
            break;
        case 'BolDig v1.0':
            $module_name = 'Boldig';
            break;
        case 'BimGo v1.0':
            $module_name = 'Bimgo';
            break;
        default:
            # code...
            break;
    }
    Artisan::call('module:seed '.$module_name);
    $module->installed=true;
    $module->save();
    return back()->with(['message' => 'Modulo Instalado.', 'alert-type' => 'success']);
})->name('module_installer');

Route::get('/{slug}', 'FrontEndController@pages')->name('pages');

