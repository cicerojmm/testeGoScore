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

Route::get('/', 'MenuPrincipalController@mostraMenu');
Route::get('/problema1', 'LivroEmprestadoController@mostraFormulario');
Route::get('/problema1/emprestimo/{id}',  'LivroEmprestadoController@mostraEmprestimo');

Route::post('/problema1/salvaFormulario', 'LivroEmprestadoController@salvaFormulario');

