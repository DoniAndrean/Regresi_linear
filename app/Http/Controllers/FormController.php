<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Keluarga;
use App\Models\KontakDarurat;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    private $statusOptions = ["Sudah Kawin", "Belum Kawin", "Cerai Hidup", "Cerai Mati"];

    public function index()
    {
        return view("formKandidat.index");
    }
    public function inputkode(Request $request)
    {
        return redirect()->route("form.personal", $request->kode);
    }
    public function personal($id)
    {
        $kandidat = DB::table('kandidat')->where('id_kandidat', $id)->first();
        $statusOptions = $this->statusOptions;
        $title = "personal";
        return view("formKandidat.personal", compact("kandidat", "statusOptions", "id", "title"));
    }

    public function personalStore($id, Request $request)
    {
        Kandidat::where("id_kandidat", $id)->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'informasi_lowongan' => $request->informasi_lowongan,
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
        ]);

        return redirect()->route("form.bahasa", $id);
    }

    public function bahasa($id)
    {
        $bahasa = DB::table('bahasa')->where('id_kandidat', $id)->get();
        $title = "bahasa";
        return view("formKandidat.bahasa", compact("bahasa", "id", "title"));
    }
    public function bahasaStore(Request $request, $id)
    {
        //array
        $data = [
            'id_kandidat' => $id,
            'bahasa_lain' => $request->bahasa_lain,
            'membaca' => $request->membaca,
            'menulis' => $request->menulis,
            'berbicara' => $request->berbicara,
        ];
        DB::table('bahasa')->insertGetId($data);
        return redirect()->route("form.pendidikan", $id);
    }

    public function pendidikan($id)
    {
        $pendidikan = Pendidikan::where('id_kandidat', $id)->get();
        $pendidikan_informal = DB::table('pendidikan_informal')->where('id_kandidat', $id)->get();
        $title = "pendidikan";
        return view("formKandidat.pendidikan", compact("pendidikan", "id", "title", "pendidikan_informal"));
    }

    public function pendidikanStore(Request $request, $id)
    {
        //array
        $data = [
            'id_kandidat' => $id,
            'nama_sekolah' => $request->nama_sekolah,
            'jenjang' => $request->jenjang,
            'tahun_from' => $request->tahun_from,
            'tahun_to' => $request->tahun_to,
            'gpa' => $request->gpa,
        ];

        Pendidikan::create($data);

        return redirect()->route("form.pendidikan", $id);
    }
    public function keluarga($id)
    {
        $keluarga = Keluarga::where('id_kandidat', $id)->get();
        $title = "keluarga";
        return view("formKandidat.keluarga", compact("keluarga", "id", "title"));
    }

    public function keluargaStore(Request $request, $id)
    {
        $data = [
            'id_kandidat' => $id,
            'nama_keluarga' => $request->nama_keluarga,
            'relation' => $request->relation,
            'age' => $request->age,
            'address' => $request->address,
        ];
        Keluarga::create($data);

        return redirect()->route("form.keluarga", $id);
    }
    public function kontak($id)
    {
        $kontak_darurat = KontakDarurat::where('id_kandidat', $id)->get();
        $title = "kontak";
        return view("formKandidat.kontak", compact("kontak_darurat", "id", "title"));
    }

    public function kontakStore(Request $request, $id)
    {
        $data = [
            'id_kandidat' => $id,
            'nama_kontak_darurat' => $request->nama_kontak_darurat,
            'relation' => $request->relation,
            'age' => $request->age,
            'address' => $request->address,
        ];
        KontakDarurat::create($data);

        return redirect()->route("form.kontak", $id);
    }
    public function pengalaman($id)
    {
        $pengalaman = Pengalaman::where('id_kandidat', $id)->get();
        $title = "pengalaman";
        return view("formKandidat.pengalaman", compact("pengalaman", "id", "title"));
    }

    public function pengalamanStore(Request $request, $id)
    {
        $data = [
            'id_kandidat' => $id,
            'company_name' => $request->company_name,
            'position' => $request->position,
            'periode' => $request->periode,
            'salary' => $request->salary,
            'main_duties' => $request->main_duties,
            'reason_for_leaving' => $request->reason_for_leaving,
        ];
        Pengalaman::create($data);

        return redirect()->route("form.pengalaman", $id);
    }
    public function lainnya($id)
    {
        $data['id'] = $id;
        $kandidat = Kandidat::where('id_kandidat', $id)->first();
        $data['kandidat'] = $kandidat;
        $data['title'] = 'lainnya';
        return view('formKandidat.lainnya', $data);
    }
    public function lainnyaStore(Request $request, $id)
    {
        //array
        $data = [
            'expected_basic' => $request->expected_basic,
            'expected_allowence' => $request->expected_allowence,
            'total_salary' => $request->total_salary,
            'your_wishes' => $request->your_wishes,
        ];
        Kandidat::where('id_kandidat', $id)->update($data);

        Alert::success('Berhasil!', 'Berhasil mengisi data kandidat');
        return redirect()->route("form", $id);
    }
}
