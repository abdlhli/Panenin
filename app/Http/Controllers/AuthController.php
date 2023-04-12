<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $akun = Akun::where('email', $request->email)->first();

        if (!$akun || !Hash::check($request->password, $akun->password)) {
            return back()->withErrors([
                'email' => 'Email atau Password yang diinputkan salah!',
            ]);
        }

        Auth::login($akun);
        return redirect()->route('admin.dashboard');
    }

    public function register(Request $request)
    {
        // validasi data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akun',
            'password' => 'required|string|min:8|confirmed',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
        ]);

        // buat user baru
        $user = Akun::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'alamat' => $validatedData['alamat'],
            'no_telp' => $validatedData['no_telp'],
            'id_hak_akses' => 1, // set hak akses sebagai Admin
        ]);

        // login user
        Auth::login($user);

        // redirect ke halaman setelah berhasil login
        return redirect('/home');
    }
}
