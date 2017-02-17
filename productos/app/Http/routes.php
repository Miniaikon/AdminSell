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
Route::get('deuda/{id}/destroy',[
  'uses' => 'deudaController@destroy', 
  'as' => 'deuda.destroy'
]);
Route::resource('inventory', 'inventarioController');
Route::resource('note', 'noteController');

Route::get('diaria',[
  'uses' => 'tablasController@daily', 
  'as' => 'diaria'
]);
Route::get('pedidos/{id}/detalle',[
  'uses' => 'tablasController@pedido', 
  'as' => 'pedido.detalle'
]);
Route::get('show',[
  'uses' => 'tablasController@show', 
  'as' => 'show'
]);
Route::get('deudas',[
  'uses' => 'tablasController@deuda', 
  'as' => 'descuento.detalles'
]);
Route::get('comming',[
  'uses' => 'tablasController@comming', 
  'as' => 'comming'
]);
Route::get('login',[
  'uses' => 'tablasController@login', 
  'as' => 'login'
]);