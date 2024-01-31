<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
	public function index()
	{
		$model = DB::table('cuti')
			->select('*', 'master_cuti.jenis_cuti as jenis_cuti', 'cuti.id_cuti as id_cuti')
			->join('master_cuti', 'master_cuti.id_cuti', '=', 'cuti.jenis_cuti')
			->join('karyawan', 'karyawan.id_sap', '=', 'cuti.id_sap')
			// ->where('status_karyawan', 'Kontrak')
			->orderBy('karyawan.nama', 'ASC')
			->get();

		// mengirim data model ke view index
		return view('/cuti/index', ['model' => $model]);
	}

	// method untuk menampilkan view form tambah berita
	public function tambah()
	{
		$data = [];
		$model = DB::table('karyawan')
			->orderBy('nama', 'ASC')
			->get();
		$modelMasterCuti = DB::table('master_cuti')
			->orderBy('jenis_cuti', 'ASC')
			->get();
		$data['model'] = $model;
		$data['modelMasterCuti'] = $modelMasterCuti;
		return view('/cuti/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		//array
		$data = [
			'id_sap' => $request->id_sap,
			'jenis_cuti' => $request->jenis_cuti,
			'jumlah_cuti' => $request->jumlah_cuti,
			'start_cuti' => $request->start_cuti,
			'end_cuti' => $request->end_cuti,
			'alasan_cuti' => $request->alasan_cuti,
		];
		$id =	DB::table('cuti')->insertGetId($data);

		// alihkan halaman ke halaman berita
		return redirect('/cuti');
	}
	// method untuk edit data berita
	public function edit($id)
	{
		// DEKLARASI
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('cuti')->where('id_cuti', $id)->get()[0];
		//karyawan
		$modelKaryawan = DB::table('karyawan')
			->orderBy('nama', 'ASC')
			->get();
		$temp = [];
		foreach ($modelKaryawan as $key => $value) {
			$temp[$value->id_sap] = $value;
		}
		$modelKaryawan = $temp;
		//master cuti
		$modelMasterCuti = DB::table('master_cuti')
			->orderBy('jenis_cuti', 'ASC')
			->get();
		$temp = [];
		foreach ($modelMasterCuti as $key => $value) {
			$temp[$value->id_cuti] = $value;
		}
		$modelMasterCuti = $temp;

		//PARSING/KIRIM DATA
		$data['model'] = $model;
		$data['modelKaryawan'] = $modelKaryawan;
		$data['modelMasterCuti'] = $modelMasterCuti;

		// passing data model yang didapat ke view edit.blade.php
		return view('/cuti/edit', $data);
	}
	// update data berita
	public function update(Request $request)
	{
		// update data berita
		$data = [
			'id_sap' => $request->id_sap,
			'jenis_cuti' => $request->jenis_cuti,
			'jumlah_cuti' => $request->jumlah_cuti,
			'start_cuti' => $request->start_cuti,
			'end_cuti' => $request->end_cuti,
			'alasan_cuti' => $request->alasan_cuti,
		];

		DB::table('cuti')->where('id_cuti', $request->id_cuti)->update($data);

		// alihkan halaman ke halaman berita
		return redirect('/cuti');
	}
	// method untuk hapus data berita
	public function hapus($id)
	{
		// menghapus data berita berdasarkan id yang dipilih
		DB::table('cuti')->where('id_cuti', $id)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/cuti');
	}
}
