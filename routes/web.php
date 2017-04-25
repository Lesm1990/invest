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

Route::resource('clientes', 'ClienteController', ['except' => ['index', 'show']]);

Route::resource('compras', 'CompraController');

Route::resource('empleados', 'EmpleadoController', ['except' => ['index', 'show']]);

Route::resource('productos', 'ProductoController', ['except' => ['index', 'show']]);

Route::resource('proveedores', 'ProveedorController', ['except' => ['index', 'show']]);

Route::resource('tipoIdentificacion', 'TipoIdentificacionController', ['except' => ['index', 'show']]);

Route::resource('tipoProducto', 'TipoProductoController', ['except' => ['index', 'show']]);

Route::resource('valoresAgregados', 'ValoresAgregadoController', ['except' => ['index', 'show']]);

Route::resource('ventas', 'VentaController');

Route::resource('marcas', 'MarcaController', ['except' => ['index', 'show']]);
