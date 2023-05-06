<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function hapus($id)
    {
        $data = Akun::find($id);
        $data->delete();


        Session::flash('hapusUser', 'Akun berhasil dihapus!');
        return redirect()->back();
    }
}
