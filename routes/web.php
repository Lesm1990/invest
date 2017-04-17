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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clientes', 'ClienteController');

Route::resource('compras', 'CompraController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('productos', 'ProductoController');

Route::resource('proveedores', 'ProveedorController');

Route::resource('tipoIdentificacion', 'TipoIdentificacionController');

Route::resource('tipoProducto', 'TipoProductoController');

Route::resource('valoresAgregados', 'ValoresAgregadoController');

Route::resource('ventas', 'VentaController');
