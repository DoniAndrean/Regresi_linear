<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
	public function index()
	{
		$model = DB::table('karyawan')
			->where('status_karyawan', 'Kontrak')
			// ->orderBy('tanggal_terbit', 'DESC')
			->get();

		// mengirim data model ke view index
		return view('/karyawan/index', ['model' => $model]);
	}

	public function permanen()
	{
		$model = DB::table('karyawan')
			->where('status_karyawan', 'Permanen')
			// ->orderBy('tanggal_terbit', 'DESC')
			->get();

		// mengirim data model ke view index
		return view('/karyawan/index', ['model' => $model]);
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
		return view('/karyawan/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		//array
		$data = [
			'id_sap' => $request->id_sap,
			'id_nik' => $request->id_nik,
			'nama' => $request->nama,
			'id_badge' => $request->id_badge,
			'join_date' => $request->join_date,
			'no_ktp' => $request->no_ktp,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'agama' => $request->agama,
			'pendidikan' => $request->pendidikan,
			'jurusan_pendidikan' => $request->jurusan_pendidikan,
			'nama_sekolahasal' => $request->nama_sekolahasal,
			'tahun_lulus' => $request->tahun_lulus,
			'level_karyawan' => $request->level_karyawan,
			'departemen' => $request->departemen,
			'posisi' => $request->posisi,
			'status_karyawan' => $request->status_karyawan,
			'email_pribdi' => $request->email_pribdi,
			'email_kantor' => $request->email_kantor,
			'jenis_kelamin' => $request->jenis_kelamin,
			'suku' => $request->suku,
			'status_kawin' => $request->status_kawin,
			'jmlh_tanggung' => $request->jmlh_tanggung,
			'no_hp' => $request->no_hp,
			'no_wa' => $request->no_wa,
			'riwayat_pelatihan' => $request->riwayat_pelatihan,
			'kelas_bpjs' => $request->kelas_bpjs,
			'foto' => $request->foto
		];
		$id =	DB::table('karyawan')->insertGetId($data);

		// alihkan halaman ke halaman berita
		return redirect('/karyawan');
	}
	// method untuk edit data berita
	public function edit($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('karyawan')->where('id_sap', $id)->get()[0];
		// print_r($model[0]);
		// exit();

		// passing data model yang didapat ke view edit.blade.php
		return view('/karyawan/edit', ['model' => $model]);
	}
	// update data berita
	public function update(Request $request)
	{
		// update data berita
		$data = [
			'id_nik' => $request->id_nik,
			'nama' => $request->nama,
			'id_badge' => $request->id_badge,
			'join_date' => $request->join_date,
			'no_ktp' => $request->no_ktp,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'agama' => $request->agama,
			'pendidikan' => $request->pendidikan,
			'jurusan_pendidikan' => $request->jurusan_pendidikan,
			'nama_sekolahasal' => $request->nama_sekolahasal,
			'tahun_lulus' => $request->tahun_lulus,
			'level_karyawan' => $request->level_karyawan,
			'departemen' => $request->departemen,
			'posisi' => $request->posisi,
			'status_karyawan' => $request->status_karyawan,
			'email_pribdi' => $request->email_pribdi,
			'email_kantor' => $request->email_kantor,
			'jenis_kelamin' => $request->jenis_kelamin,
			'suku' => $request->suku,
			'status_kawin' => $request->status_kawin,
			'jmlh_tanggung' => $request->jmlh_tanggung,
			'no_hp' => $request->no_hp,
			'no_wa' => $request->no_wa,
			'riwayat_pelatihan' => $request->riwayat_pelatihan,
			'kelas_bpjs' => $request->kelas_bpjs,
			'foto' => $request->foto
		];

		DB::table('karyawan')->where('id_sap', $request->id_sap)->update($data);

		// alihkan halaman ke halaman berita
		return redirect('/karyawan');
	}
	// method untuk hapus data berita
	public function hapus($id)
	{
		// menghapus data berita berdasarkan id yang dipilih
		DB::table('karyawan')->where('id_sap', $id)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/karyawan');
	}

	public function detail($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('karyawan')->where('id_sap', $id)->get()[0];
		// print_r($model[0]);
		// exit();

		// passing data model yang didapat ke view edit.blade.php
		return view('/karyawan/detail', ['model' => $model]);
	}
}
