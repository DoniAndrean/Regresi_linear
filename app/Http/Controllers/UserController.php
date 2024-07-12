<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function generate()
    {

        $employees = Karyawan::whereDoesntHave('user')->get();
        foreach ($employees as  $employee) {
            User::create([
                "karyawan_id" => $employee->id_sap,
                "nama" => $employee->nama,
                "email" => $employee->email_kantor,
                "password" => bcrypt($employee->id_sap),
                "role" => "karyawan"
            ]);
        }
        Alert::success('Berhasil!', 'Berhasil Generate ' . count($employees) . " Pengguna baru dari data karyawan");
        return redirect("/users");
    }

    public function index()
    {
        $model = User::all();
        return view("users.index", compact('model'));
    }
}
