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

Route::get('pessoaCadastro','pessoaController@index');
Route::get('pessoaCadastroUpdate','pessoaController@update');
Route::get('pessoaCadastroStore','pessoaController@store');
//Route::get('noticia/{id}', 'NoticiaController@index');
Route::get('noticia', 'NoticiaController@index');
Route::get('teste','pessoaController@teste');
Route::get('cadastrar','pessoaController@store');
Route::get('home','homeController@index');