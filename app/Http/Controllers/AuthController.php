<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function LoginPage()
    {
        return view('auth.login');
    }

    public function RegisterPage()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $akun = Akun::where('email', $request->email)->first();

        if (!$akun) {
            return back()
                ->withErrors([
                    'email' => 'Akun tidak terdaftar!',
                ])
                ->withInput();
        }

        if (!Hash::check($request->password, $akun->password)) {
            return back()
                ->withErrors([
                    'email' => 'Email atau Password yang diinputkan salah!',
                ])
                ->withInput();
        }

        if ($akun->id_hak_akses != 1 && $akun->id_hak_akses != 2) {
            return back()
                ->withErrors([
                    'email' => 'Anda tidak memiliki hak akses untuk login!',
                ])
                ->withInput();
        }

        Auth::login($akun);
        Session::flash('berhasilLogin', 'Login Berhasil!');
        return redirect()->route('admin.dashboard');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Session::flash('logout', 'Logout Berhasil!');
        return redirect('/login');
    }

    public function loginMobile(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $akun = Akun::where('email', $request->email)->first();

        if (!$akun) {
            return response()->json(['message' => 'Akun tidak terdaftar!'], 404);
        }

        if (!Hash::check($request->password, $akun->password)) {
            return response()->json(['message' => 'Email atau Password yang diinputkan salah!'], 404);
        }

        return response()->json(['data' => $akun, 'message' => 'Login Berhasil', 'code' => 200], 200);
    }
}
