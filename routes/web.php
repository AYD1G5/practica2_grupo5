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
Route::get('/cargamasiva', function (){
    return view('subir2');
});
Route::get('/PruebaCrearCliente', function(){
  return view('CRUDClientes.CrearCliente');
});
Route::get('/PruebaEditarCliente2', function(){
  return view('CRUDClientes.EditarCliente2');
});
Route::get('/PruebaEditarCliente', function(){
  return view('CRUDClientes.EditarCliente');
});
