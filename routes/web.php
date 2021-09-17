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

Route::get('/', function () {
    $titulo = "Hunter x Hunter";
    $clase = "bg-home";
    return view('welcome', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/informacion', function () {
    $titulo = "Informacion";
    $clase = "bg-info";
    return view('/seccion/informacion', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/historia', function () {
    $titulo = "Historia";
    $clase = "bg-hisoria";
    return view('/seccion/historia', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/personajes', function () {
    $titulo = "Personajes";
    $clase = "bg-per";
    return view('/seccion/personajes', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/episodios', function () {
    $titulo = "Episodios";
    $clase = "bg-epi";
    return view('/seccion/episodios', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/manga', function () {
    $titulo = "Manga";
    $clase = "bg-manga";
    return view('/seccion/manga', ['titulo' => $titulo,'clase' => $clase]);
});

Route::get('/opening', function () {
    $titulo = "Openings";
    $clase = "bg-opening";
    return view('/seccion/opening', ['titulo' => $titulo,'clase' => $clase]);
});
