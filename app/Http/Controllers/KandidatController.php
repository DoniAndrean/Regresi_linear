<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\Models\Kandidat;
use App\Models\MasterSoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KandidatController extends Controller
{
	private static $options = [
		[
			"label" => "Limited",
			"value" => 1,
		],
		[
			"label" => "Some",
			"value" => 2,
		],
		[
			"label" => "Strong",
			"value" => 3,
		],
		[
			"label" => "Very Strong",
			"value" => 4,
		],
	];
	private $statusOptions = ["Sudah Kawin", "Belum Kawin", "Cerai Hidup", "Cerai Mati"];
	public function index()
	{
		$model = DB::table('kandidat')
			// ->where('status_karyawan', 'Kontrak')
			// ->orderBy('tanggal_terbit', 'DESC')
			->get();

		// mengirim data model ke view index
		return view('/kandidat/index', ['model' => $model]);
	}

	public function generate()
	{
		Kandidat::create();
		return redirect()->back();
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
		return view('/kandidat/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		//array
		$data = [
			'posisi' => $request->posisi,
			'informasi_lowongan' => $request->informasi_lowongan,
			'nama' => $request->nama,
			'umur' => $request->umur,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'status_perkawinan' => $request->status_perkawinan,
			'jenis_kelamin' => $request->jenis_kelamin,
			'berat_badan' => $request->berat_badan,
			'tinggi_badan' => $request->tinggi_badan,
			'alamat' => $request->alamat,
			'no_hp' => $request->no_hp,
			'email' => $request->email,
			'bahasa_pertama' => $request->bahasa_pertama
		];
		// print_r($data);
		$id =	DB::table('kandidat')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-bahasa/' . $id);
	}

	public function tambahBahasa($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$bahasa = DB::table('bahasa')->where('id_kandidat', $id)->get();
		$data['bahasa'] = $bahasa;
		// print_r($bahasa);

		return view('/kandidat/tambah_bahasa', $data);
	}
	// method untuk insert data ke table berita
	public function tambahBahasaProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'bahasa_lain' => $request->bahasa_lain,
			'membaca' => $request->membaca,
			'menulis' => $request->menulis,
			'berbicara' => $request->berbicara,
		];
		// print_r($data);
		$id =	DB::table('bahasa')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-bahasa/' . $request->id_kandidat);
	}
	// method untuk edit data berita
	public function edit($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('kandidat')->where('id_kandidat', $id)->first();

		// passing data model yang didapat ke view edit.blade.php
		return view('/kandidat/edit', ['model' => $model, "statusOptions" => $this->statusOptions]);
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
		DB::table('kandidat')->where('id_kandidat', $id)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/kandidat');
	}

	public function detail($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$model = DB::table('karyawan')->where('id_sap', $id)->get()[0];
		// print_r($model[0]);
		// exit();

		// passing data model yang didapat ke view edit.blade.php
		return view('/kandidat/detail', ['model' => $model]);
	}


	public function tambahPendidikan($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$pendidikan = DB::table('pendidikan')->where('id_kandidat', $id)->get();
		$data['pendidikan'] = $pendidikan;
		// informal
		$pendidikan_informal = DB::table('pendidikan_informal')->where('id_kandidat', $id)->get();
		$data['pendidikan_informal'] = $pendidikan_informal;
		// print_r($pendidikan);

		return view('/kandidat/pendidikan', $data);
	}
	public function tambahPendidikanProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'nama_sekolah' => $request->nama_sekolah,
			'jenjang' => $request->jenjang,
			'tahun_from' => $request->tahun_from,
			'tahun_to' => $request->tahun_to,
			'gpa' => $request->gpa,
		];
		// print_r($data);
		$id =	DB::table('pendidikan')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-pendidikan/' . $request->id_kandidat);
	}
	public function tambahPendidikanInformalProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'institusi' => $request->institusi,
			'major' => $request->major,
			'tahun_from' => $request->tahun_from,
			'tahun_to' => $request->tahun_to,
			'gpa' => $request->gpa,
		];
		// print_r($data);
		$id =	DB::table('pendidikan_informal')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-pendidikan/' . $request->id_kandidat);
	}

	public function tambahKeluarga($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$keluarga = DB::table('keluarga')->where('id_kandidat', $id)->get();
		$data['keluarga'] = $keluarga;
		// print_r($pendidikan);

		return view('/kandidat/keluarga', $data);
	}
	public function tambahKeluargaProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'nama_keluarga' => $request->nama_keluarga,
			'relation' => $request->relation,
			'age' => $request->age,
			'address' => $request->address,
		];
		// print_r($data);
		$id =	DB::table('keluarga')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-keluarga/' . $request->id_kandidat);
	}
	public function tambahKontakDarurat($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$kontak_darurat = DB::table('kontak_darurat')->where('id_kandidat', $id)->get();
		$data['kontak_darurat'] = $kontak_darurat;
		// informal
		$pendidikan_informal = DB::table('pendidikan_informal')->where('id_kandidat', $id)->get();
		$data['pendidikan_informal'] = $pendidikan_informal;
		// print_r($pendidikan);

		return view('/kandidat/kontak_darurat', $data);
	}
	public function tambahKontakDaruratProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'nama_kontak_darurat' => $request->nama_kontak_darurat,
			'relation' => $request->relation,
			'age' => $request->age,
			'address' => $request->address,
		];
		// print_r($data);
		$id =	DB::table('kontak_darurat')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-kontak-darurat/' . $request->id_kandidat);
	}
	public function tambahPengalaman($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$pengalaman = DB::table('pengalaman')->where('id_kandidat', $id)->get();
		$data['pengalaman'] = $pengalaman;

		return view('/kandidat/pengalaman', $data);
	}
	public function tambahPengalamanProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'company_name' => $request->company_name,
			'position' => $request->position,
			'periode' => $request->periode,
			'salary' => $request->salary,
			'main_duties' => $request->main_duties,
			'reason_for_leaving' => $request->reason_for_leaving,
		];
		// print_r($data);
		$id =	DB::table('pengalaman')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-pengalaman/' . $request->id_kandidat);
	}
	public function tambahLainnya($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$kandidat = DB::table('kandidat')->where('id_kandidat', $id)->get();
		$data['kandidat'] = $kandidat[0];

		// print_r($kandidat);
		// exit;

		return view('/kandidat/lainnya', $data);
	}
	public function tambahLainnyaProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'expected_basic' => $request->expected_basic,
			'expected_allowence' => $request->expected_allowence,
			'total_salary' => $request->total_salary,
			'your_wishes' => $request->your_wishes,
			// 'main_duties' => $request->main_duties,
			// 'reason_for_leaving' => $request->reason_for_leaving,
		];
		//print_r($data);
		DB::table('kandidat')->where('id_kandidat', $request->id_kandidat)->update($data);
		//$id =	DB::table('kandidat')->insertGetId($data);
		// echo $id;
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/tambah-lainnya/' . $request->id_kandidat);
	}

	public function personalData($id)
	{
		// memanggil view tambah
		$data['id'] = $id;
		$kandidat = DB::table('kandidat')->where('id_kandidat', $id)->first();
		$data['kandidat'] = $kandidat;
		$data["statusOptions"] = $this->statusOptions;
		// print_r($kandidat);
		// exit;

		return view('/kandidat/personal', $data);
	}

	public function personalDataProses(Request $request)
	{
		//array
		$data = [
			'id_kandidat' => $request->id_kandidat,
			'posisi' => $request->posisi,
			'informasi_lowongan' => $request->informasi_lowongan,
			'nama' => $request->nama,
			'umur' => $request->umur,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'status_perkawinan' => $request->status_perkawinan,
			'jenis_kelamin' => $request->jenis_kelamin,
			'berat_badan' => $request->berat_badan,
			'tinggi_badan' => $request->tinggi_badan,
			'alamat' => $request->alamat,
			'no_hp' => $request->no_hp,
			'email' => $request->email,
			'bahasa_pertama' => $request->bahasa_pertama
		];

		DB::table('kandidat')->where('id_kandidat', $request->id_kandidat)->update($data);
		// alihkan halaman ke halaman berita
		return redirect('/kandidat/personal-data/' . $request->id_kandidat);
	}

	public function rekapData($id)
	{
		// Ambil data kandidat berdasarkan id
		$kandidat = DB::table('kandidat')->where('id_kandidat', $id)->first();

		// Ambil data bahasa lain yang dikuasai oleh kandidat
		$kandidatBahasa = DB::table('bahasa')
			->where('id_kandidat', $id)
			->get();

		// Ambil data pendidikan kandidat
		$pendidikan = DB::table('pendidikan')
			->where('id_kandidat', $id)
			->get();

		// Ambil data keluarga kandidat
		$keluarga = DB::table('keluarga')
			->where('id_kandidat', $id)
			->get();

		//Ambil data kontak darurat
		$kontakDarurat = DB::table('kontak_darurat')
			->where('id_kandidat', $id)
			->get();

		// Ambil data pengalaman kerja kandidat
		$pengalaman = DB::table('pengalaman')
			->where('id_kandidat', $id)
			->get();

		// Kirim semua data ke view
		return view('kandidat/rekap', [
			'kandidat' 		=> $kandidat,
			'bahasaLain' 	=> $kandidatBahasa,
			'pendidikan' 	=> $pendidikan,
			'keluarga' 		=> $keluarga,
			'kontakDarurat' => $kontakDarurat,
			'pengalaman' 	=> $pengalaman,
		]);
	}

	public function interview($id)
	{
		$model = Kandidat::where("id_kandidat", $id)->first();
		$interview = Interview::where("id_kandidat", $id)->get();
		$masterSoal = MasterSoal::all();
		$options = self::$options;
		return view("kandidat.interview", compact('model', 'masterSoal', 'interview', 'options'));
	}
	public function interviewEdit($id)
	{
		$model = Kandidat::where("id_kandidat", $id)->first();
		$interview = Interview::where("id_kandidat", $id)->get();
		$masterSoal = MasterSoal::all();
		$options = self::$options;
		return view("kandidat.interview-edit", compact('model', 'masterSoal', 'interview', 'options'));
	}
	public function interviewStore(Request $request, $id)
	{
		foreach ($request->soal as $key => $item) {
			Interview::create([
				"id_kandidat" => $id,
				"id_soal" => $key,
				"jawaban" => $item["value"],
				"detail" => $item["detail"],
			]);
		}
		Kandidat::where("id_kandidat", $id)->update([
			"telah_interview" => true
		]);
		return redirect("/kandidat");
	}

	public function interviewUpdate(Request $request, $id)
	{
		foreach ($request->soal as $key => $item) {
			Interview::where("id_kandidat", $id)->where("id_soal", $key)->update([
				"jawaban" => $item["value"],
				"detail" => $item["detail"],
			]);
		}
		return redirect("/kandidat");
	}
}
