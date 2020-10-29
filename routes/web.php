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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/consulta', 'CargaController@index')->name('carga.index');
Route::post('/registro','CargaController@store')->name('carga.store');
Route::get('/edit/{id}','CargaController@edit' )->name('carga.edit');
Route::put('/edit/{id}','CargaController@update' )->name('carga.update');
Route::delete('/delete/{id}','CargaController@destroy')->name('carga.destroy');
Route::get('/carga/busqueda','CargaController@busqueda')->name('carga.busqueda');
