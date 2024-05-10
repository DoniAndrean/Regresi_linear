<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Kandidat;
use App\Models\MasterSoal;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function show($encryptId)
    {
        $id = decrypt($encryptId);
        $kandidat = Kandidat::where("id_kandidat", $id)->first();
        $model = Interview::where("id_kandidat", $id)->get();
        $soal = MasterSoal::all();
        return view("interview.show", compact("model", "kandidat", "soal"));
    }
    public function store(Request $request, $idKandidat)
    {
        foreach ($request->jawab as $key => $value) {
            Interview::create([
                "id_kandidat" => $idKandidat,
                "id_soal" => $key,
                "jawaban" => $value,
            ]);
        }
        Kandidat::where("id_kandidat", $idKandidat)->update([
            "telah_interview" => true
        ]);
        return redirect("/");
    }
    public function detail($id)
    {
        $model = Interview::findOrFail($id);
        return view("interview.detail", compact("model"));
    }
    public function edit($id)
    {
        $model = Interview::findOrFail($id);
        return view("interview.edit", compact("model"));
    }

    public function update(Request $request, $id)
    {
        Interview::findOrFail($id)->update([
            "soal" => $request->soal
        ]);
        return redirect()->route("interview");
    }
    public function delete($id)
    {
        Interview::findOrFail($id)->delete();
        return redirect()->route("interview");
    }
}
