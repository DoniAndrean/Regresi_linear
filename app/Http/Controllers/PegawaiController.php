<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
	public function index()
	{
		$model = DB::table('pegawai')
			// ->where('id_kecamatan', $id_kecamatan)
			// ->orderBy('tanggal_terbit', 'DESC')
			->get();

		// mengirim data model ke view index
		return view('/pegawai/index', ['model' => $model]);
	}

	// method untuk menampilkan view form tambah berita
	public function tambah()
	{
		// memanggil view tambah
		// $berita = DB::table('berita')->where('id_berita',$id)->get()[0];
		// $kecamatan = DB::table('kecamatan')->get();
		// $data['berita'] = $berita;
		// $data['kecamatan'] = $kecamatan;
		$data = [];
		return view('/pegawai/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		//array
		$data = [
			'nama_pegawai' => $request->nama_pegawai,
			'alamat' => $request->alamat,
		];
		$id =	DB::table('pegawai')->insertGetId($data);

		// alihkan halaman ke halaman berita
		return redirect('/pegawai');
	}
	// method untuk edit data berita
	public function edit($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('pegawai')->where('id_pegawai', $id)->get()[0];
		// print_r($model[0]);
		// exit();

		// passing data model yang didapat ke view edit.blade.php
		return view('/pegawai/edit', ['model' => $model]);
	}
	// update data berita
	public function update(Request $request)
	{
		// update data berita
		$data = [
			'nama_pegawai' => $request->nama_pegawai,
			'alamat' => $request->alamat,
		];

		DB::table('pegawai')->where('id_pegawai', $request->id_pegawai)->update($data);

		// alihkan halaman ke halaman berita
		return redirect('/pegawai');
	}
	// method untuk hapus data berita
	public function hapus($id)
	{
		// menghapus data berita berdasarkan id yang dipilih
		DB::table('pegawai')->where('id_pegawai', $id)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/pegawai');
	}
}
