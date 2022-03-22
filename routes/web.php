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

Route::get('/', function () { return view('index'); })->name('index');

Route::resource('categorias', 'CategoriasController');
Route::resource('patrimonio', 'PatrimonioController');

Route::get('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');
Route::post('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');
Route::put('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');

Route::get('forms.show', 'PatrimonioController@show')->name('patrimonio.show');

Route::get('patrimonio.destroy', 'PatrimonioController@destroy')->name('patrimonio.destroy');
Route::post('patrimonio.destroy', 'PatrimonioController@destroy')->name('patrimonio.destroy');

Route::get('forms.editar', 'PatrimonioController@edit')->name('patrimonio.edit')->whereUuid('id');
Route::post('forms.editar', 'PatrimonioController@edit')->name('patrimonio.edit')->whereUuid('id');
Route::put('forms.editar', 'PatrimonioController@edit')->name('patrimonio.edit')->whereUuid('id');
