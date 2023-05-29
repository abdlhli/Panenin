<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function update(Request $request)
    {
        $user = \App\Models\Akun::find(Auth::id());
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;

        // mengecek apakah user merubah foto profile
        if ($request->hasFile('foto_profile')) {

            // hapus gambar lama apabila ada
            if ($user->image && file_exists(storage_path('app/public/assets/images/photoprofile/' . $user->image))) {
                unlink('public/assets/images/photoprofile/' . $user->image);
            }

            // simpan gambar baru ke direktori publik dan db
            $image = $request->file('foto_profile');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/photoprofile'), $imageName);
            $user->foto_profile = $imageName;
        }

        // mengecek apakah user merubah password
        if ($request->has('ubah_password')) {
            // Validasi password baru
            $validatedData['password'] = $request->validate([
                'password' => 'required|string|min:8',
            ])['password'];

            // update password akun admin
            $user->password = Hash::make($validatedData['password']);
            $user->save();
        }

        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Account updated successfully!');
    }
}
