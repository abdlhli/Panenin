<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    public function getAllProduk()
    {
        $produk = Produk::with('jenis_produk')->get();

        return response()->json(['data' => $produk], 200);
    }

    public function getProdukTerlaris()
    {
        $produkTerlaris = DB::table('detail_pemesanan')
            ->join('produk', 'detail_pemesanan.id_produk', '=', 'produk.id_produk')
            ->select('produk.id_produk', 'produk.foto_produk', 'produk.nama_produk', 'produk.harga_produk', DB::raw('SUM(detail_pemesanan.jumlah_produk) as total_jumlah'))
            ->groupBy('produk.id_produk', 'produk.foto_produk', 'produk.nama_produk', 'produk.harga_produk')
            ->orderByDesc('total_jumlah')
            ->take(6)
            ->get();

        return response()->json(['data' => $produkTerlaris], 200);
    }


    public function getProdukByJenis($id_jenis_produk)
    {
        $produk = Produk::where('id_jenis_produk', $id_jenis_produk)
            ->with('jenis_produk')
            ->get();

        return response()->json(['data' => $produk], 200);
    }

    public function getProdukById($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return response()->json(['data' => $produk], 200);
        } else {
            return response()->json(['message' => 'produk not found'], 404);
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'satuan_produk' => 'required',
            'stock_produk' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_jenis_produk' => 'required'
        ]);

        if ($request->hasFile('foto_produk')) {
            $imageName = time() . '.' . $request->foto_produk->getClientOriginalName();
            $request->foto_produk->move(public_path('assets/images/photoproduk/'), $imageName);

            $produk = Produk::create([
                'nama_produk' => $validatedData['nama_produk'],
                'harga_produk' => $validatedData['harga_produk'],
                'satuan_produk' => $validatedData['satuan_produk'],
                'stock_produk' => $validatedData['stock_produk'],
                'foto_produk' => $imageName,
                'id_jenis_produk' => $validatedData['id_jenis_produk']
            ]);

            Session::flash('tambahproduk', 'Produk berhasil ditambahkan!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Foto produk wajib diunggah!');
            return redirect()->back();
        }
    }



    public function update(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required|numeric',
            'satuan_produk' => 'required',
            'stock_produk' => 'required|numeric',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_jenis_produk' => 'required'
        ]);

        // hapus gambar lama apabila ada
        if ($request->foto_produk && file_exists(storage_path('app/public/assets/images/photoproduk/' . $request->foto_produk))) {
            unlink('assets/images/photoproduk' . $request->foto_produk);
        }

        if ($request->hasFile('foto_produk')) {
            $imageName = time() . '.' . $request->foto_produk->getClientOriginalExtension();
            $request->foto_produk->move(public_path('assets/images/photoproduk/'), $imageName);
            $produk->foto_produk = $imageName;
        }

        $produk->nama_produk = $validatedData['nama_produk'];
        $produk->harga_produk = $validatedData['harga_produk'];
        $produk->satuan_produk = $validatedData['satuan_produk'];
        $produk->stock_produk = $validatedData['stock_produk'];
        $produk->id_jenis_produk = $validatedData['id_jenis_produk'];
        $produk->save();

        Session::flash('updateproduk', 'Data produk berhasil diupdate!');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $produk = Produk::find($id);
        $fotoProdukPath = public_path('assets/images/photoproduk/' . $produk->foto_produk);

        if (file_exists($fotoProdukPath)) {
            unlink($fotoProdukPath);
        }

        $produk->delete();

        Session::flash('hapusproduk', 'Produk berhasil dihapus!');
        return redirect()->back();
    }

    public function getAllProdukForProdukList()
    {
        $produks = Produk::all();

        return view('produk', compact('produks'));
    }
}
