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
    return \redirect("/login");
});
Route::get('/cargamasiva', function (){
    return view('subir2');
});

Route::post('/CrearProducto','ProductosController@guardar');
Route::get('/CrearProducto', 'ProductosController@mostrar');

Route::get('/EditarProducto', function (){
    return view('CRUDPRODUCTO/Editar');
});

Route::get('/EliminarProducto', function (){
    return view('CRUDPRODUCTO/Eliminar');
});

Route::get('/VerProducto', function (){
    return view('CRUDPRODUCTO/Listar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/PruebaCrearCliente', function(){
  return view('CRUDClientes.CrearCliente');
});
Route::get('/PruebaEditarCliente2', function(){
  return view('CRUDClientes.EditarCliente2');
});
Route::get('/PruebaEditarCliente', function(){
  return view('CRUDClientes.EditarCliente');
});

Route::post('/ProveedorProducto','FacturaCompraController@guardar');
Route::get('/ProveedorProducto', 'FacturaCompraController@index');
Route::get('/ProveedorProducto/eliminar/{id}', 'FacturaCompraController@eliminar');
Route::get('/ProveedorProducto/finalizar', 'FacturaCompraController@finalizar');
