<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;

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
                "password" => bcrypt("1"),
                "role" => "karyawan"
            ]);
        }

        return back();
    }
}
