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
//Home
Route::get('/', 'homeController@index');
//------------------------------------------------------------

//Category
Route::get('category', 'homeController@category');
//------------------------------------------------------------

//Cadastrar-Login
Route::get('pessoaCadastro','pessoaController@index');
Route::get('pessoaCadastroUpdate','pessoaController@update');
Route::get('pessoaCadastroStore','pessoaController@store');
Route::get('teste','pessoaController@teste');
Route::get('cadastrar','pessoaController@store');
Route::get('login','pessoaController@login');
Route::get('logout','pessoaController@logout');
//------------------------------------------------------------

//Noticia
Route::get('noticia', 'NoticiaController@index');
//------------------------------------------------------------

//User
Route::get('user', 'userController@index');
Route::get('redefinirSenha', 'userController@redefinirSenhaView');
Route::get('redefinirSenhaEmail', 'userController@redefinirSenha');
//------------------------------------------------------------