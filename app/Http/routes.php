<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'funcionesController@index');
Route::get('/login', 'funcionesController@login');
Route::get('/iniciarSesion', 'funcionesController@iniciarSesion');
Route::get('/registro', 'funcionesController@registro');
Route::post('/registrar', 'funcionesController@registrar');

Route::get('/principal', 'funcionesController@principal');
Route::get('/perfil', 'funcionesController@perfil');
Route::post('/perfilGuardar', 'funcionesController@perfilGuardar');

Route::get('/cerrarSesion', 'funcionesController@cerrarSesion');

Route::get('/curriculumPDF', 'funcionesController@curriculumPDF');
