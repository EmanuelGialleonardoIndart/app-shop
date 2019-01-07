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

Route::get('/','TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products/create','ProductController@create'); //formulario

Route::get('/admin/products','ProductController@index');//listar

Route::post('/admin/products','ProductController@store');//crear

Route::get('/admin/products/{id}/edit','ProductController@edit'); //formulario edicion

Route::post('/admin/products/{id}/edit','ProductController@update');//editar

Route::post('/admin/products/{id}/delete','ProductController@delete');//eliminar producto