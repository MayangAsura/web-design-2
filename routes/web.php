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

Route::get('/', 'PagesController@home');
Route::get('/laporan', 'AsistenController@');
Route::get('/jumlahasisten', 'AsistenController@index');
Route::get('/kehadiranasisten', 'AsistenController@');
Route::get('/matakuliah', 'AsistenController@');
Route::get('/materi', 'AsistenController@');