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

        if ($request->hasFile('foto_jenis_produk')) {
            $imageName = time() . '.' . $request->foto_jenis_produk->getClientOriginalName();
            $request->foto_jenis_produk->move(public_path('assets/images/photojenisproduk/'), $imageName);
            $jenis_produk->foto_jenis_produk = $imageName;
        }

        $jenis_produk->save();

        Session::flash('tambahJenisProduk', 'Jenis produk berhasil ditambahkan!');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $data = JenisProduk::find($id);

        // hapus file foto_jenis_produk jika ada
        if ($data->foto_jenis_produk != null && file_exists(public_path('assets/images/photojenisproduk/') . $data->foto_jenis_produk)) {
            unlink(public_path('assets/images/photojenisproduk/') . $data->foto_jenis_produk);
        }

        $data->delete();

        Session::flash('hapusJenisProduk', 'Jenis produk berhasil dihapus!');
        return redirect()->back();
    }

    public function getAllJenisProduk()
    {
        $jenisproduk = JenisProduk::all();

        return response()->json(['data' => $jenisproduk], 200);
    }
}
