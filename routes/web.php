<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\http\Controllers\PortalController@index')->name('entrada.index');

Route::get('/noticias','App\http\Controllers\PortalController@noticias')->name('noticias.index');

Route::get('/empresa','App\http\Controllers\PortalController@empresa')->name('empresa.index');

Route::get('/onde-estamos','App\http\Controllers\PortalController@ondestamos')->name('ondestamos.index');

Route::get('/contactos','App\http\Controllers\PortalController@contactos')->name('contactos.index');

Route::get('/formulario','App\http\Controllers\PortalController@formulario')->name('formulario.index');