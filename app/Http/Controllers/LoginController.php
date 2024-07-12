<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $user = User::where('karyawan_id', $request->username)->orWhere('email', $request->username)->first();
        if (!empty($user) && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->ingat_saya);
            return redirect()->intended('/');
        }
        return redirect()->back()->with('error_login', 'Username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
