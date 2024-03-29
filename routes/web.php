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


Route::resource('estudiante','EstudianteController');
 
Route::resource('asignatura','AsignaturaController');

Route::resource('asignatura_grupo','Asignatura_grupoController');

Route::resource('comentario','ComentarioController');

