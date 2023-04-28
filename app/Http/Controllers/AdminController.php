<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function inputAdmin(Request $request)
    {
        try {
            // validasi data
            $validatedData = $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:8',
                'alamat' => 'required|string|max:255',
                'no_telp' => 'required|string|max:255',
                'id_hak_akses' => 'required'
            ]);

            // buat user baru
            Akun::create([
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'alamat' => $validatedData['alamat'],
                'no_telp' => $validatedData['no_telp'],
                'id_hak_akses' => $validatedData['id_hak_akses'],
            ]);

            // redirect ke halaman setelah berhasil login
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti!');
        }
    }

    public function hapus($id_user)
    {
        $data = Akun::find($id_user);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
