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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ujian', 'UjianController@index');
Route::post('/ujian/create','UjianController@create');
Route::get('/ujian/{id}/edit', 'UjianController@edit');
Route::post('/ujian/{id}/update', 'UjianController@update');
Route::get('/ujian/{id}/delete', 'UjianController@delete');
