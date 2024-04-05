<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelatihan;
use Illuminate\Http\Request;

class JadwalPelatihanController extends Controller
{
    public function index()
    {
        $model = JadwalPelatihan::all();

        return view("jadwal-pelatihan.index", compact("model"));
    }

    public function create()
    {
        return view("jadwal-pelatihan.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "waktu" => "required"
        ]);

        JadwalPelatihan::create(["waktu" => $request->waktu]);

        return redirect()->route("jadwal-pelatihan");
    }

    public function delete($id)
    {
        JadwalPelatihan::findOrFail($id)->delete();
        return back();
    }
}
