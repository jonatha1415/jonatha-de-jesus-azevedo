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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aluno', 'AlunoController@index')->name('aluno');
Route::get('/coordenador', 'CoordenadorController@index')->name('coordenador');
Route::get('/curso', 'CursoController@index')->name('curso');
