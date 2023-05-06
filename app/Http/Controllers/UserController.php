<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getAllUser()
    {
        $user = Akun::all();

        return response()->json(['data' => $user], 200);
    }
    public function getUserById($id)
    {
        $user = Akun::find($id);
        if ($user) {
            return response()->json(['data' => $user], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function addUser(Request $request)
    {
        $user = new Akun();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->alamat = $request->input('alamat');
        $user->no_telp = $request->input('no_telp');
        $user->id_hak_akses = $request->input('3');
        $user->save();
        return response()->json(['message' => 'User added successfully', 'data' => $user], 201);
    }

    public function hapus($id)
    {
        $data = Akun::find($id);
        $data->delete();


        Session::flash('hapusUser', 'Akun berhasil dihapus!');
        return redirect()->back();
    }
}
