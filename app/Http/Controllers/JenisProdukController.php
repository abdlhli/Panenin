<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;
use Illuminate\Support\Facades\Session;

class JenisProdukController extends Controller
{
    public function tambahJenisProduk(Request $request)
    {
        $jenis_produk = new JenisProduk;
        $jenis_produk->nama_jenis_produk = $request->input('nama_jenis_produk');
        $jenis_produk->save();

        Session::flash('tambahJenisProduk', 'Jenis produk berhasil ditambahkan!');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $data = JenisProduk::find($id);
        $data->delete();

        Session::flash('hapusJenisProduk', 'Jenis produk berhasil dihapus!');
        return redirect()->back();
    }
}
