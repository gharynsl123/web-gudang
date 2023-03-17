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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route untuk ruangan
Route::resource('kategori', 'KategoriController');
//sama saja dengan kita menambahkan :
/**
 * Route::get('kategori', 'KategoriController@index');
 * Route::get('kategori/create', 'KategoriController@create');
 * Route::post('kategori', 'KategoriController@store');
 * Route::get('kategori/{id}', 'KategoriController@show');
 * Route::get('kategori/{id}/edit', 'KategoriController@edit');
 * Route::put('kategori/{id}', 'KategoriController@update');
 * Route::delete('kategori/{id}', 'KategoriController@destroy');
 */

Route::resource('user', 'UserController');
// Route untuk ruangan
Route::resource('ruangan', 'RuanganController');
Route::resource('barang', 'BarangController');
