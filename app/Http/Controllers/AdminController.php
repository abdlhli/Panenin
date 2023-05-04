<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inputAdmin(Request $request)
    {
        // validasi data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:akun',
            'password' => 'required|string|min:8',
            'alamat' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:255',
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
            'foto_profile' => 'defaultprofile.png'
        ]);

        // redirect ke halaman setelah berhasil login
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {

        // validasi data
        $validatedData = $request->validate([
            // 'firstname' => 'required|string|max:255',
            // 'lastname' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8',
            // 'alamat' => 'required|string|max:255',
            // 'no_telp' => 'required|string|max:255',
            'id_hak_akses' => 'required|int'
        ]);

        // ambil data user berdasarkan id
        $user = Akun::find($id);

        // update data user
        $user->update([
            // 'firstname' => $validatedData['firstname'],
            // 'lastname' => $validatedData['lastname'],
            // 'email' => $validatedData['email'],
            // 'alamat' => $validatedData['alamat'],
            // 'no_telp' => $validatedData['no_telp'],
            'id_hak_akses' => $validatedData['id_hak_akses'],
        ]);

        // jika password diinputkan, maka update password
        if (!empty($validatedData['password'])) {
            $user->update([
                'password' => bcrypt($validatedData['password'])
            ]);
        }

        // redirect ke halaman setelah berhasil update
        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        $data = Akun::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
