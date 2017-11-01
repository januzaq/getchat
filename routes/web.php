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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('pages')->group(function () {
    Route::get('/list', 'Page\PageController@index')->name('list');
    Route::get('/create', 'Page\PageController@create');
    Route::post('/store', 'Page\PageController@store')->name('store');
    Route::get('/edit', 'Page\PageController@edit');
    Route::post('/edit','Page\PageController@update')->name('edit');
});

Route::get('/{url}','FrontPageController@all');


Route::get('/w/{whatsapp}', 'FrontPageController@getwhatsapp');
Route::get('/t/{telegram}', 'FrontPageController@gettelegram');
Route::get('/m/{messenger}', 'FrontPageController@getmessenger');
Route::get('/v/{viber}', 'FrontPageController@getviber');
Route::get('/fb/{facebook}', 'FrontPageController@getfacebook');
Route::get('/vk/{vk}', 'FrontPageController@getvk');
Route::get('/ok/{ok}', 'FrontPageController@getok');
Route::get('/s/{skype}', 'FrontPageController@getskype');
