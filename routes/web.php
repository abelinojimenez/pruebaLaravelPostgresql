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


Route::get('/','empleadoController@showPageStart');
Route::get('/salarioMenor','empleadoController@salarioMenor');
Route::post('/add','empleadoController@guardarEmpleado');
Route::get('/salarioMayo','empleadoController@salarioMayor');
Route::get('/MismoSalario','empleadoController@empleadosMismoSalario');
Route::get('/edadEmpleadoFechNac','empleadoController@edadEmpleadosfecha');
