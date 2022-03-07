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
    return view('home');
})->name('home');

// rutas de estudiantes
// Route::get('/estudiante', 'EstudianteController@index')->name('estudiante-home');
// Route::get('/estudiante-crear', 'EstudianteController@create')->name('estudiante-crear');
// Route::put('/estudiante-store', 'EstudianteController@store')->name('estudiante-store');
// Route::get('/estudiante-edit', 'EstudianteController@edit')->name('estudiante-edit');
// Route::delete('/estudiante-delete', 'EstudianteController@destroy')->name('estudiante-delete');
Route::resource('estudiante', 'EstudianteController');

// Route::get('/grupo', 'GrupoController@index')->name('grupo-home');
Route::resource('grupo', 'GrupoController');
