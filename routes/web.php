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
    return view('layout');
});


Route::resource('products', 'ProductController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('venta', 'VentaController');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');



Route::get('inicio2', function () {
    return view('inicio2');
});