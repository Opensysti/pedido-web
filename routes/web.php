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

Route::get('/home', 'HomeController@index');

Route::resource('vendedorWebs', 'vendedor_webController');

Route::resource('pedidoMasterProdutoWebs', 'pedidoMasterProdutoWebController');

Route::resource('pedidoMasterProdutoWebs', 'pedidoMasterProdutoWebController');

Route::resource('pedidoDetalheProdutoWebs', 'pedidoDetalheProdutoWebController');

Route::resource('vendedorWebs', 'vendedorWebController');

Route::resource('descontoVendedorWebs', 'descontoVendedorWebController');

Route::resource('prazopagtoVendedorWebs', 'prazopagtoVendedorWebController');

Route::resource('produtoWebs', 'produtoWebController');