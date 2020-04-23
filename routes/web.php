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
    return view('index');
});
Route::get('/pesdik/lihat_pendaftar','PesdikController@lihat_pendaftar');
Route::get('/pesdik/form_daftar','PesdikController@form_daftar');
Route::post('/pesdik/daftar','PesdikController@daftar');
Route::get('/pesdik/{id}/detail','PesdikController@detail');