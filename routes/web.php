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

Route::get('/cadastro', 'FormularioController@cadastros');

Route::get('/cadastro/pesquisar', 'FormularioController@pesquisar');

Route::post('/cadastro/pesquisar', 'FormularioController@pesquisar');

Route::get('/cadastro/inserir', 'FormularioController@mostrar_inserir');

Route::post('/cadastro/inserir', 'FormularioController@inserir');

Route::get('/cadastro/alterar/{id}', 'FormularioController@mostrar_alterar');

Route::post('/cadastro/alterar', 'FormularioController@alterar');

Route::get('/cadastro/excluir/{id}', 'FormularioController@excluir');

Route::get('/cadastro/curriculo/{id}', 'FormularioController@curriculo');