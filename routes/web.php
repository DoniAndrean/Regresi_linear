<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\JadwalPelatihanController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/login", [LoginController::class, 'login'])->name("login")->middleware('guest');
Route::post("/login", [LoginController::class, 'postLogin'])->name("postLogin");

Route::middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index');
    Route::get("/logout", [LoginController::class, 'logout'])->name("logout");

    Route::middleware('admin-only')->group(function () {
        Route::get('/user/generate', [UserController::class, 'generate'])->name("user.generate");
        Route::get('users', [UserController::class, 'index'])->name("users");
    });
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
    Route::get('/cuti/{id}/approve', 'App\Http\Controllers\CutiController@approve')->name("cuti.approve");

    //route CRUD Menu
    Route::get('/kandidat', 'App\Http\Controllers\KandidatController@index');

    //route Tambah
    Route::get('/kandidat/tambah', 'App\Http\Controllers\KandidatController@tambah');
    Route::get('/kandidat/generate', 'App\Http\Controllers\KandidatController@generate');
    Route::post('/kandidat/store', 'App\Http\Controllers\KandidatController@store');

    // bahasa
    Route::get('/kandidat/tambah-bahasa/{id}', 'App\Http\Controllers\KandidatController@tambahBahasa');
    Route::post('/kandidat/tambah-bahasa-proses', 'App\Http\Controllers\KandidatController@tambahBahasaProses');

    // personal data
    Route::get('/kandidat/personal-data/{id}', 'App\Http\Controllers\KandidatController@personalData');
    Route::post('/kandidat/personal-data-proses', 'App\Http\Controllers\KandidatController@personalDataProses');

    // pendidikan
    Route::get('/kandidat/tambah-pendidikan/{id}', 'App\Http\Controllers\KandidatController@tambahPendidikan');
    Route::post('/kandidat/tambah-pendidikan-proses', 'App\Http\Controllers\KandidatController@tambahPendidikanProses');
    Route::post('/kandidat/tambah-pendidikan-informal-proses', 'App\Http\Controllers\KandidatController@tambahPendidikanInformalProses');

    // keluarga
    Route::get('/kandidat/tambah-keluarga/{id}', 'App\Http\Controllers\KandidatController@tambahKeluarga');
    Route::post('/kandidat/tambah-keluarga-proses', 'App\Http\Controllers\KandidatController@tambahKeluargaProses');

    // kontak-darurat
    Route::get('/kandidat/tambah-kontak-darurat/{id}', 'App\Http\Controllers\KandidatController@tambahKontakDarurat');
    Route::post('/kandidat/tambah-kontak-darurat-proses', 'App\Http\Controllers\KandidatController@tambahKontakDaruratProses');

    // pengalaman
    Route::get('/kandidat/tambah-pengalaman/{id}', 'App\Http\Controllers\KandidatController@tambahPengalaman');
    Route::post('/kandidat/tambah-pengalaman-proses', 'App\Http\Controllers\KandidatController@tambahPengalamanProses');

    // lainnya
    Route::get('/kandidat/tambah-lainnya/{id}', 'App\Http\Controllers\KandidatController@tambahLainnya');
    Route::post('/kandidat/tambah-lainnya-proses', 'App\Http\Controllers\KandidatController@tambahLainnyaProses');

    //route Edit
    Route::get('/kandidat/edit/{id}', 'App\Http\Controllers\KandidatController@edit');
    Route::get('/kandidat/detail/{id}', 'App\Http\Controllers\KandidatController@detail');
    Route::post('/kandidat/update', 'App\Http\Controllers\KandidatController@update');

    //route Hapus
    Route::get('/kandidat/hapus/{id}', 'App\Http\Controllers\KandidatController@hapus');

    //route Rekap Data
    Route::get('/kandidat/rekap/{id}', 'App\Http\Controllers\KandidatController@rekapData');
    //route Interview karyawan
    Route::get('/kandidat/interview/{id}', 'App\Http\Controllers\KandidatController@interview');
    Route::get('/kandidat/interview/{id}/edit', 'App\Http\Controllers\KandidatController@interviewEdit');
    Route::put('/kandidat/interview/{id}', 'App\Http\Controllers\KandidatController@interviewUpdate');
    Route::post('/kandidat/interview/{id}', 'App\Http\Controllers\KandidatController@interviewStore');
    //end

    Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');

    //route Tambah
    Route::get('/karyawan/tambah', 'App\Http\Controllers\KaryawanController@tambah');
    Route::post('/karyawan/store', 'App\Http\Controllers\KaryawanController@store');

    //route Edit
    Route::get('/karyawan/edit/{id}', 'App\Http\Controllers\KaryawanController@edit');
    Route::get('/karyawan/detail/{id}', 'App\Http\Controllers\KaryawanController@detail')->name("karyawan.detail");
    Route::post('/karyawan/update', 'App\Http\Controllers\KaryawanController@update');

    //route Hapus
    Route::get('/karyawan/hapus/{id}', 'App\Http\Controllers\KaryawanController@hapus');
    //end

    //route CRUD Menu
    Route::get('/permanen', 'App\Http\Controllers\KaryawanController@permanen');
    Route::get('/profil', 'App\Http\Controllers\HomeController@profil');

    Route::get('/jadwal-pelatihan', [JadwalPelatihanController::class, 'index'])->name('jadwal-pelatihan');
    Route::get('/jadwal-pelatihan/create', [JadwalPelatihanController::class, 'create'])->name('jadwal-pelatihan.create');
    Route::post('/jadwal-pelatihan', [JadwalPelatihanController::class, 'store'])->name('jadwal-pelatihan.store');
    Route::delete('/jadwal-pelatihan/{id}', [JadwalPelatihanController::class, 'delete'])->name('jadwal-pelatihan.delete');

    Route::get('/soal', [SoalController::class, 'index'])->name('soal');
    Route::get('/soal/create', [SoalController::class, 'create'])->name('soal.create');
    Route::get('/soal/{id}/edit', [SoalController::class, 'edit'])->name('soal.edit');
    Route::put('/soal/{id}', [SoalController::class, 'update'])->name('soal.update');
    Route::post('/soal', [SoalController::class, 'store'])->name('soal.store');
    Route::delete('/soal/{id}', [SoalController::class, 'delete'])->name('soal.delete');

    Route::get('/interview/{id}', [InterviewController::class, 'show'])->name('interview');
    Route::post('/interview/{idKandidat}', [InterviewController::class, 'store'])->name('interview.store');
});

Route::get("form-kandidat/", [FormController::class, "index"])->name("form");
Route::post("form-kandidat/input-kode", [FormController::class, "inputKode"])->name("form.inputKode");
Route::get("/form-kandidat/{id}/personal", [FormController::class, "personal"])->name("form.personal");
Route::post("/form-kandidat/{id}/personal", [FormController::class, "personalStore"])->name("form.personal.store");

Route::get("/form-kandidat/{id}/bahasa", [FormController::class, "bahasa"])->name("form.bahasa");
Route::post("/form-kandidat/{id}/bahasa", [FormController::class, "bahasaStore"])->name("form.bahasa.store");

Route::get("/form-kandidat/{id}/pendidikan", [FormController::class, "pendidikan"])->name("form.pendidikan");
Route::post("/form-kandidat/{id}/pendidikan", [FormController::class, "pendidikanStore"])->name("form.pendidikan.store");

Route::get("/form-kandidat/{id}/keluarga", [FormController::class, "keluarga"])->name("form.keluarga");
Route::post("/form-kandidat/{id}/keluarga", [FormController::class, "keluargaStore"])->name("form.keluarga.store");

Route::get("/form-kandidat/{id}/kontak", [FormController::class, "kontak"])->name("form.kontak");
Route::post("/form-kandidat/{id}/kontak", [FormController::class, "kontakStore"])->name("form.kontak.store");

Route::get("/form-kandidat/{id}/pengalaman", [FormController::class, "pengalaman"])->name("form.pengalaman");
Route::post("/form-kandidat/{id}/pengalaman", [FormController::class, "pengalamanStore"])->name("form.pengalaman.store");

Route::get("/form-kandidat/{id}/lainnya", [FormController::class, "lainnya"])->name("form.lainnya");
Route::post("/form-kandidat/{id}/lainnya", [FormController::class, "lainnyaStore"])->name("form.lainnya.store");
