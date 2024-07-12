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
            "nama_pelatihan" => "required",
            "waktu" => "required",
        ]);

        JadwalPelatihan::create($request->all());
        return redirect()->route("jadwal-pelatihan");
    }
    public function edit($id)
    {
        $model = JadwalPelatihan::findOrFail($id);
        return view("jadwal-pelatihan.edit", compact("model"));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_pelatihan" => "required",
            "waktu" => "required",
        ]);
        $model = JadwalPelatihan::findOrFail($id);
        $model->update($request->all());
        return redirect()->route("jadwal-pelatihan");
    }
    public function delete($id)
    {
        JadwalPelatihan::findOrFail($id)->delete();
        return back();
    }
}
