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

Route::get('/', 'HomeController@root');

Auth::routes();


Route::get('/homes', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'RegistroController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

  Route::get('registro/import','RegistroController@import')->name('registroimport');
  Route::post('registro/import','RegistroController@importCreate')->name('registroCreate');
  Route::resource('registro', 'RegistroController');
  Route::resource('region', 'RegionController');
  Route::resource('celular', 'CelularController');
});


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
