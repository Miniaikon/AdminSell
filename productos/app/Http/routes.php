<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'tablasController@index');

Route::resource('daily', 'dailyController');
Route::resource('pedido', 'pedidoController');
Route::resource('deuda', 'deudaController');
Route::resource('inventory', 'inventarioController');
Route::resource('note', 'noteController');

Route::get('diaria', 'tablasController@daily');
Route::get('pedidos/{id}/detalle', 'tablasController@pedido');
Route::get('deudas', 'tablasController@deuda');
Route::get('show', 'tablasController@show');
Route::get('comming', 'tablasController@comming');
