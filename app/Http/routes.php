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
//Route::get('/login', 'funcionesController@login');
//Route::get('/iniciarSesion', 'funcionesController@iniciarSesion');
//Route::get('/registro', 'funcionesController@registro');
//Route::post('/registrar', 'funcionesController@registrar');

Route::auth();
//Route::get('/principal', 'HomeController@principal');
Route::get('/home', 'HomeController@home');
Route::get('/perfil', 'HomeController@perfil');
Route::post('/perfilGuardar', 'HomeController@perfilGuardar');

//Route::get('/cerrarSesion', 'funcionesController@cerrarSesion');
Route::get('/curriculumPDF', 'HomeController@curriculumPDF');
Route::get('/paginaWeb{id}', 'HomeController@paginaWeb');

