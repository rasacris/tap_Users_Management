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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/consultar', 'Controladores@consultar');
Route::post('/buscar', 'Controladores@search');
Route::get('/modificar', 'Controladores@index');
Route::get('/modificar/{id}', 'Controladores@vistaModificar');
Route::get('/ver/{id}', 'Controladores@show');
Route::get('eliminar/{id}', 'Controladores@destroy');
Route::post('/actualizar', 'Controladores@update');

