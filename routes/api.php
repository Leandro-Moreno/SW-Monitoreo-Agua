<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "API" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:API')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

Route::resource('/registro', 'API\RegistroController');
Route::get('/registro-ultimos', 'API\RegistroController@ultimos100');
Route::get('/registro-ultimos/{cantidad}', 'API\RegistroController@ultimosDinamico');
Route::get('/region/{region}/{fechaIni}/{fechaFin}', 'API\RegionController@porfecha');
Route::get('/registro-ubicacion/{latitud}/{longitud}/{radio}', 'API\RegistroController@ubicacion');
Route::resource('/region', 'API\RegionController');
