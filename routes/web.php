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
    return redirect()->action('VendedoresController@index');
});

/*
 * VENDEDORES
 */
Route::get('/vendedores', 'VendedoresController@index');
Route::get('/vendedor/novo', 'VendedoresController@create');
Route::post('/vendedor/novo', 'VendedoresController@store');
Route::get('/vendedor/edit/{id}', 'VendedoresController@show');
Route::put('/vendedor/edit/{id}', 'VendedoresController@edit');
Route::get('vendedor/remove/{id}', 'VendedoresController@destroy');

/*
 * SALES
 */
Route::get('vendas/', 'SaleController@index');
Route::get('vendedor/vendas/{vendedor_id}', 'SaleController@show');
Route::get('vendas/nova/{vendedor_id}', 'SaleController@create');
Route::post('vendas/nova/{vendedor_id}', 'SaleController@store');
Route::get('vendas/atualizar/aprovado/{venda_id}', 'SaleController@aprovado');
Route::get('vendas/atualizar/faturado/{venda_id}', 'SaleController@faturado');
Route::get('vendas/atualizar/enviado/{venda_id}', 'SaleController@enviado');
Route::get('vendas/atualizar/entregue/{venda_id}', 'SaleController@entregue');
Route::get('vendas/atualizar/cancelado/{venda_id}', 'SaleController@cancelado');

