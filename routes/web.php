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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacto', 'HomeController@contact')->name('contacto');

Route::get('/homenajes', 'HomenajesController@index')->name('homenajes');
Route::get('/homenajes/{id}', 'HomenajesController@show')->name('homenajes.show');

Route::get('/colaboradores', 'ColaboradoresController@index')->name('colaboradores');

Auth::routes();
