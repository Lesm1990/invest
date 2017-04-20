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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio@index');
});

*/

Route::get('/', 'frontEnd@index');
Route::get('compras', 'frontEnd@compras');
Route::get('login', 'frontEnd@login');


