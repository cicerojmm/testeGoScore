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

//Rota da pagina inicial
Route::get('/', 'MenuPrincipalController@mostraMenu');

/*
 * Rotas do problema 1
 */
Route::get('/problema1', 'LivroEmprestadoController@mostraFormulario');
Route::get('/problema1/emprestimo/{id}',  'LivroEmprestadoController@mostraEmprestimo');
Route::post('/problema1/salvaFormulario', 'LivroEmprestadoController@salvaFormulario');

/*
 * Rotas do problema 2
 */
Route::get('/problema2', 'MatrizController@mostraMatriz');

/*
 * Rotas do problema 3
 */
Route::get('/problema3', 'CalculaAlturaController@mostraAltura');
Route::get('/problema3/mostraIdade', 'CalculaAlturaController@calculaAltura');

/*
 * Rotas do problema 4
 */
Route::get('/problema4', 'RepetePalavraController@mostraFormulario');
Route::post('/problema4/mostraPalavra', 'RepetePalavraController@repetePalavra');

/*
 * Rotas do problema 5
 */
Route::get('/problema5', 'SequenciaFibonacciController@mostraFormulario');
Route::post('/problema5/mostraSequencia', 'SequenciaFibonacciController@recebeNumerosAleatorio');