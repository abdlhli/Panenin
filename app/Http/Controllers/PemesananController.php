<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use Illuminate\Support\Facades\Session;

class PemesananController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'detail_pemesanan.*.id_produk' => 'required',
            'detail_pemesanan.*.jumlah_produk' => 'required',
        ]);

        try {
            // Buat model Pemesanan baru
            $pemesanan = new Pemesanan;

            // Membuat id pemesanan dengan menggunakan boot()
            $prefix = 'PSN';
            $randomString = Str::random(8);
            $timestamp = now()->format('YmdHis');
            $idPemesanan = $prefix . $timestamp . $randomString;

            $pemesanan->id_pemesanan = $idPemesanan;
            $pemesanan->tgl_pemesanan = now();
            $pemesanan->id_user = $request->input('id_user');
            $pemesanan->id_status_pemesanan = 9;

            // Hitung total harga pemesanan
            $totalHarga = collect($request->input('detail_pemesanan'))
                ->sum(function ($detailPemesanan) {
                    return $detailPemesanan['jumlah_produk'] * $detailPemesanan['harga_produk'];
                });

            $pemesanan->total_harga_pemesanan = $totalHarga;
            $pemesanan->save();

            // Refresh model Pemesanan untuk mengambil primary key yang baru dibuat
            $pemesanan->refresh();

            // Simpan data detail pemesanan
            foreach ($request->input('detail_pemesanan') as $detailPemesanan) {
                $detail = new DetailPemesanan;
                $detail->id_pemesanan = $idPemesanan; // Mengambil id_pemesanan dari model $pemesanan yang baru dibuat, Disini tadinya ada BUG
                $detail->id_produk = $detailPemesanan['id_produk'];
                $detail->jumlah_produk = $detailPemesanan['jumlah_produk'];
                $detail->total_harga_produk = $detailPemesanan['jumlah_produk'] * $detailPemesanan['harga_produk']; //Disini tadinya juga ada BUG

                // dd($detail);
                try {
                    $detail->save();

                    // Kurangi stock_produk pada tabel Produk
                    $produk = Produk::find($detailPemesanan['id_produk']);
                    $produk->stock_produk -= $detailPemesanan['jumlah_produk'];
                    $produk->save();
                } catch (\Illuminate\Database\QueryException $e) {
                    // Jika terjadi error foreign key constraint violation, hapus model Pemesanan yang baru saja dibuat
                    $pemesanan->delete();

                    return response()->json([
                        'message' => 'Detail pemesanan gagal ditambahkan',
                        'error' => 'Detail pemesanan gagal ditambahkan: ' . $e->getMessage(),
                    ], 500);
                }
            }

            return response()->json([
                'message' => 'Pemesanan berhasil ditambahkan',
                'data' => $pemesanan,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Pemesanan gagal ditambahkan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateStatus(Request $request, $idPemesanan)
    {

        $validatedData = $request->validate([
            'id_status_pemesanan' => 'required',
        ]);

        $statusPemesanan = Pemesanan::findOrFail($idPemesanan);
        $statusPemesanan->id_status_pemesanan = $validatedData['id_status_pemesanan'];
        $statusPemesanan->save();

        Session::flash('updatepemesanan', 'Status pemesanan berhasil diupdate!');
        return redirect()->back();
    }

    public function getAllPemesanan()
    {
        $Pemesanan = Pemesanan::all();

        return response()->json(['data' => $Pemesanan], 200);
    }

    public function getPemesananByIdUser($id)
    {
        $pemesanan = Pemesanan::with('detailPemesanan', 'statusPemesanan')->where('id_user', $id)->get();

        if ($pemesanan->isEmpty()) {
            return response()->json(['message' => 'Pemesanan not found'], 404);
        }

        return response()->json(['data' => $pemesanan], 200);
    }
}

// CATATAN
// Tidak Ada Validasi Stock, Apabila ada validasi stock, total_harga_pemesanan yang ngebug merubah data yang sudah ada menjadi data terbaru