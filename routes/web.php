<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/system')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('system.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('system.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('system.produtos');
});

Route::fallback(function(){
    echo "Página não encontrada!";
    echo '<br> <a href="'.route('site.index').'">HOME</a>';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');