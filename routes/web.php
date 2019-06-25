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


Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'RegisterController@index');
Route::get('/sekretariat', 'SekretariatController@index');
Route::get('/sekretariat/pegawai', 'SekretariatController@pegawai');
Route::get('/sekretariat/laporan', 'SekretariatController@laporan');
Route::get('/sekretariat/detail', 'SekretariatController@detail');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/umum', 'UmumController@index');
