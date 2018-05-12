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
});
//Cadastrar-Login
Route::get('pessoaCadastro','pessoaController@index');
Route::get('pessoaCadastroUpdate','pessoaController@update');
Route::get('pessoaCadastroStore','pessoaController@store');
Route::get('teste','pessoaController@teste');
Route::get('cadastrar','pessoaController@store');
Route::get('login','pessoaController@login');
Route::get('logout','pessoaController@logout');

//Home's
Route::get('home','homeController@index');
Route::get('homeLogin','pessoaController@retornaHomeLogin');


//Noticia
Route::post('noticia', 'NoticiaController@index');
//------------------------------------------------------------