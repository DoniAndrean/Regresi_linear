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
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/profil', 'App\Http\Controllers\HomeController@profil');

//route CRUD Menu
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
//route Tambah
Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');
//route Edit
Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update', 'App\Http\Controllers\PegawaiController@update');
//route Hapus
Route::get('/pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus');
//end

//route CRUD Menu
Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');
//route Tambah
Route::get('/karyawan/tambah', 'App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store', 'App\Http\Controllers\KaryawanController@store');
//route Edit
Route::get('/karyawan/edit/{id}', 'App\Http\Controllers\KaryawanController@edit');
Route::post('/karyawan/update', 'App\Http\Controllers\KaryawanController@update');
//route Hapus
Route::get('/karyawan/hapus/{id}', 'App\Http\Controllers\KaryawanController@hapus');
//end
