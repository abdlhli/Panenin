<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        Session::flash('tambahAdmin', 'Akun berhasil ditambahkan!');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        // validasi data
        $validatedData = $request->validate([
            'password' => 'nullable|string|min:8',
            'id_hak_akses' => 'required|int'
        ]);

        // ambil data user berdasarkan id
        $user = Akun::find($id);

        // update data user
        $user->update([
            'id_hak_akses' => $validatedData['id_hak_akses'],
        ]);

        // jika password diinputkan, maka update password
        if (!empty($validatedData['password'])) {
            $user->update([
                'password' => bcrypt($validatedData['password'])
            ]);
            $user->save();
        }

        $user->save();

        // redirect ke halaman setelah berhasil update
        Session::flash('updateAdmin', 'Akun berhasil diupdate!');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $data = Akun::find($id);
        $data->delete();

        Session::flash('hapusAdmin', 'Akun berhasil dihapus!');
        return redirect()->back();
    }
}
