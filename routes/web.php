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

// //route CRUD Menu
// Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
// //route Tambah
// Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
// Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');
// //route Edit
// Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
// Route::post('/pegawai/update', 'App\Http\Controllers\PegawaiController@update');
// //route Hapus
// Route::get('/pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus');
// //end

//route CRUD Menu
Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');
//route Tambah
Route::get('/karyawan/tambah', 'App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store', 'App\Http\Controllers\KaryawanController@store');
//route Edit
Route::get('/karyawan/edit/{id}', 'App\Http\Controllers\KaryawanController@edit');
Route::get('/karyawan/detail/{id}', 'App\Http\Controllers\KaryawanController@detail');
Route::post('/karyawan/update', 'App\Http\Controllers\KaryawanController@update');
//route Hapus
Route::get('/karyawan/hapus/{id}', 'App\Http\Controllers\KaryawanController@hapus');
//end

//route CRUD Menu
Route::get('/permanen', 'App\Http\Controllers\KaryawanController@permanen');
// //route Tambah
// Route::get('/permanen/tambah', 'App\Http\Controllers\PermanenController@tambah');
// Route::post('/permanen/store', 'App\Http\Controllers\PermanenController@store');
// //route Edit
// Route::get('/permanen/edit/{id}', 'App\Http\Controllers\PermanenController@edit');
// Route::get('/permanen/detail/{id}', 'App\Http\Controllers\PermanenController@detail');
// Route::post('/permanen/update', 'App\Http\Controllers\PermanenController@update');
// //route Hapus
// Route::get('/permanen/hapus/{id}', 'App\Http\Controllers\PermanenController@hapus');
// //end


//route CRUD Menu
Route::get('/cuti', 'App\Http\Controllers\CutiController@index');
//route Tambah
Route::get('/cuti/tambah', 'App\Http\Controllers\CutiController@tambah');
Route::post('/cuti/store', 'App\Http\Controllers\CutiController@store');
//route Edit
Route::get('/cuti/edit/{id}', 'App\Http\Controllers\CutiController@edit');
Route::get('/cuti/detail/{id}', 'App\Http\Controllers\CutiController@detail');
Route::post('/cuti/update', 'App\Http\Controllers\CutiController@update');
//route Hapus
Route::get('/cuti/hapus/{id}', 'App\Http\Controllers\CutiController@hapus');
Route::get('/cuti/status/{id}/{status}', 'App\Http\Controllers\CutiController@status');
//end


//route CRUD Menu
Route::get('/kandidat', 'App\Http\Controllers\KandidatController@index');
//route Tambah
Route::get('/kandidat/tambah', 'App\Http\Controllers\KandidatController@tambah');
Route::get('/kandidat/tambah-bahasa/{id}', 'App\Http\Controllers\KandidatController@tambahBahasa');
Route::post('/kandidat/store', 'App\Http\Controllers\KandidatController@store');
//route Edit
Route::get('/kandidat/edit/{id}', 'App\Http\Controllers\KandidatController@edit');
Route::get('/kandidat/detail/{id}', 'App\Http\Controllers\KandidatController@detail');
Route::post('/kandidat/update', 'App\Http\Controllers\KandidatController@update');
//route Hapus
Route::get('/kandidat/hapus/{id}', 'App\Http\Controllers\KandidatController@hapus');
//end