<?php

namespace App\Http\Controllers;

use App\Models\MasterSoal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $model = MasterSoal::all();
        return view("soal.index", compact("model"));
    }
    public function create()
    {
        return view("soal.create");
    }
    public function store(Request $request)
    {
        MasterSoal::create([
            "soal" => $request->soal
        ]);
        return redirect()->route("soal");
    }
    public function detail($id)
    {
        $model = MasterSoal::findOrFail($id);
        return view("soal.detail", compact("model"));
    }
    public function edit($id)
    {
        $model = MasterSoal::findOrFail($id);
        return view("soal.edit", compact("model"));
    }
    public function update(Request $request, $id)
    {
        MasterSoal::findOrFail($id)->update([
            "soal" => $request->soal
        ]);
        return redirect()->route("soal");
    }
    public function delete($id)
    {
        MasterSoal::findOrFail($id)->delete();
        return redirect()->route("soal");
    }
}
