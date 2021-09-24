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

Route::get('/', 'App\Http\Controllers\InicioController@index');

Route::get('/informacion', 'App\Http\Controllers\InicioController@informacion');

Route::get('/historia', 'App\Http\Controllers\InicioController@historia');

Route::get('/personajes', 'App\Http\Controllers\InicioController@personajes');

Route::get('/episodios', 'App\Http\Controllers\InicioController@episodios');

Route::get('/manga', 'App\Http\Controllers\InicioController@manga');

Route::get('/opening', 'App\Http\Controllers\InicioController@opening');
