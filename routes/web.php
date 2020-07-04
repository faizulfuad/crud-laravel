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
    return view('master');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan semua
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan data
