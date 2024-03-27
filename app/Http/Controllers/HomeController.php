<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function index()
	{
		$totalKaryawanKontrak = DB::table('karyawan')->where('status_karyawan', 'Kontrak')->count();
		$totalKaryawanPermanen = DB::table('karyawan')->where('status_karyawan', 'Permanen')->count();
		$totalKandidat = DB::table('kandidat')->count();

		return view('/welcome', [
			'totalKaryawanKontrak' => $totalKaryawanKontrak,
			'totalKaryawanPermanen' => $totalKaryawanPermanen,
			'totalKandidat' => $totalKandidat
		]);
	}
    
	public function profil()
	{
		// mengambil data dari table berita
		//$berita = DB::table('berita')->join('kecamatan', 'kecamatan.id_kecamatan', '=', 'berita.id_kecamatan')->get();
		// $id_kecamatan = Auth::user()->id_kecamatan;

		// $berita = DB::table('berita')
		// 	// ->where('id_kecamatan', $id_kecamatan)
		// 	->orderBy('tanggal_terbit','DESC')
		// 	->get();

		// mengirim data berita ke view index
		// return view('/welcome', ['berita' => $berita]);
		return view('/profil');
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
		return view('/backend/berita/tambah', $data);
	}

	// method untuk insert data ke table berita
	public function store(Request $request)
	{
		// insert data ke table berita	
		//ubah ke slug
		$str = $request->judul_berita;
		$delimiter = '-';
		$slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
		//end slug

		// $id_kecamatan = Auth::user()->id_kecamatan;

		//array
		$data = [
			'id_kecamatan' => '0',
			'judul_berita' => $request->judul_berita,
			'slug' => $slug,
			'isi_berita' => $request->isi_berita,
			'foto_berita' => '',
			'penulis' => $request->penulis,
			'penerbit' => $request->penerbit,
			'status' => $request->status,
			'tanggal_terbit' => $request->tanggal_terbit,
		];
		$id =	DB::table('berita')->insertGetId($data);


		if ($request->file('foto_berita')) {
			$file = $request->file('foto_berita');
			$filename = $id . '.' . $file->getClientOriginalExtension();
			$file->move(public_path('images/berita'), $filename);
			$data['foto_berita'] = $filename;
		}
		DB::table('berita')->where('id_berita', $id)->update($data);

		// alihkan halaman ke halaman berita
		return redirect('/admin/berita');
	}
	// method untuk edit data berita
	public function edit($id)
	{
		// mengambil data berita berdasarkan id yang dipilih
		$berita = DB::table('berita')->where('id_berita', $id)->get()[0];
		// print_r($berita[0]);
		// exit();

		// passing data berita yang didapat ke view edit.blade.php
		return view('/backend/berita/edit', ['berita' => $berita]);
	}
	// update data berita
	public function update(Request $request)
	{
		// update data berita
		$data = [
			'judul_berita' => $request->judul_berita,
			'slug' => $request->slug,
			'isi_berita' => $request->isi_berita,
			// 'foto_berita' => $request->foto_berita,
			'penulis' => $request->penulis,
			'penerbit' => $request->penerbit,
			'status' => $request->status,
			'tanggal_terbit' => $request->tanggal_terbit,
		];
		if ($request->file('foto_berita')) {
			$file = $request->file('foto_berita');
			$filename = $request->id . '.' . $file->getClientOriginalExtension();
			$file->move(public_path('images/berita'), $filename);
			$data['foto_berita'] = $filename;
		}

		DB::table('berita')->where('id_berita', $request->id)->update($data);

		// print_r($request->isi_berita);
		// alihkan halaman ke halaman berita
		return redirect('/admin/berita');
	}
	// method untuk hapus data berita
	public function hapus($id)
	{
		// menghapus data berita berdasarkan id yang dipilih
		DB::table('berita')->where('id_berita', $id)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/admin/berita');
	}
}
