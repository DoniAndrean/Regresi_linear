<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cuti;
use App\Models\KuotaCuti;
use App\Models\MasterCuti;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
	public function index()
	{
		$role = Auth::user()->role;
		$model = DB::table('cuti')
			->select('*', 'master_cuti.jenis_cuti as jenis_cuti', 'cuti.id_cuti as id_cuti', 'cuti.jenis_cuti as jenis_id')
			->join('master_cuti', 'master_cuti.id_cuti', '=', 'cuti.jenis_cuti')
			->join('karyawan', 'karyawan.id_sap', '=', 'cuti.id_sap')
			->orderBy('karyawan.nama', 'ASC');

		if ($role == "karyawan") {
			$model->where("cuti.id_sap", Auth::user()->karyawan_id);
		}

		$model = $model->get();
		foreach ($model as  $cuti) {
			$kuota = KuotaCuti::where("kuota_cuti.jenis_cuti", $cuti->jenis_id)->where("kuota_cuti.karyawan_id", $cuti->id_sap)->first();
			$cuti->kuota_cuti = $kuota->jumlah;
		}
		// mengirim data model ke view index
		return view('/cuti/index', ['model' => $model]);
	}

	// method untuk menampilkan view form tambah berita
	public function tambah()
	{
		$data = [];
		$model = DB::table('karyawan');
		if (Auth::user()->role == "karyawan") {
			$model->where("karyawan.id_sap", Auth::user()->karyawan_id);
		}

		$modelMasterCuti = DB::table('master_cuti')
			->orderBy('jenis_cuti', 'ASC')
			->get();
		$data['model'] = $model->orderBy('nama', 'ASC')->get();
		$data['modelMasterCuti'] = $modelMasterCuti;
		return view('/cuti/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		//array
		$data = [
			'id_sap' => Auth::user()->role == "admin" ? $request->id_sap : Auth::user()->karyawan_id,
			'jenis_cuti' => $request->jenis_cuti,
			'jumlah_cuti' => $request->jumlah_cuti,
			'start_cuti' => $request->start_cuti,
			'end_cuti' => $request->end_cuti,
			'alasan_cuti' => $request->alasan_cuti,
			'status_cuti' => "Pengajuan",
		];
		$id =	DB::table('cuti')->insertGetId($data);
		$kuotaCuti = KuotaCuti::where("jenis_cuti", $request->jenis_cuti)->where("karyawan_id", Auth::user()->karyawan_id)->first();
		if (!$kuotaCuti) {
			$masterCuti = MasterCuti::where("id_cuti", $request->jenis_cuti)->first();
			KuotaCuti::create(["jenis_cuti" => $request->jenis_cuti, "karyawan_id" => Auth::user()->karyawan_id, "jumlah" => $masterCuti->jumlah]);
		}
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
	public function status($id, $status)
	{
		$data = [
			'status_cuti' => $status,
		];

		DB::table('cuti')->where('id_cuti', $id)->update($data);

		// alihkan halaman ke halaman berita
		return redirect('/cuti');
	}
	public function approve($id)
	{
		$cuti = Cuti::where('id_cuti', $id)->first();
		$kuota = KuotaCuti::where("jenis_cuti", $cuti->jenis_cuti)->where("karyawan_id", $cuti->id_sap)->first();
		$kuota->jumlah = $kuota->jumlah - $cuti->jumlah_cuti;
		$kuota->update();
		Cuti::where('id_cuti', $id)->update([
			"status_cuti" => "selesai"
		]);

		return redirect('/cuti');
	}

	public function download()
	{
		$model = DB::table('cuti')
			->select('*', 'master_cuti.jenis_cuti as jenis_cuti', 'cuti.id_cuti as id_cuti', 'cuti.jenis_cuti as jenis_id')
			->join('master_cuti', 'master_cuti.id_cuti', '=', 'cuti.jenis_cuti')
			->join('karyawan', 'karyawan.id_sap', '=', 'cuti.id_sap')
			->orderBy('karyawan.nama', 'ASC')->get();
		foreach ($model as $cuti) {
			$kuota = KuotaCuti::where("kuota_cuti.jenis_cuti", $cuti->jenis_id)->where("kuota_cuti.karyawan_id", $cuti->id_sap)->first();
			$cuti->kuota_cuti = $kuota->jumlah;
		}
		$pdf = Pdf::loadView("pdf.cuti", compact('model'));
		$now = Carbon::now()->translatedFormat('d-F-Y');
		return $pdf->download('hr_cuti_' . $now . '.pdf');
	}
}
