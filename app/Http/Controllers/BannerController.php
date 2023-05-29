<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function getAllBanner()
    {
        $banner = Banner::where('status', 'Aktif')->get();

        return response()->json(['data' => $banner], 200);
    }

    public function inputBanner(Request $request)
    {
        try {
            // validasi data
            $validatedData = $request->validate([
                'nama_banner' => 'required|string|max:255',
            ]);

            // simpan gambar baru ke direktori publik dan db
            $image = $request->file('foto_banner');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/banner'), $imageName);

            // buat banner baru
            $banner = new Banner();
            $banner->nama_banner = $validatedData['nama_banner'];
            $banner->foto_banner = $imageName;
            $banner->id_user = Auth::id();
            $banner->save();

            // redirect ke halaman setelah berhasil login
            Session::flash('successAdd', 'Banner berhasil ditambahkan!');
            return redirect()->back();
        } catch (\Exception $e) {
            Session::flash('errorAdd', 'Terjadi kesalahan. Silakan coba lagi nanti!');
            return redirect()->back();
        }
    }

    public function updateBanner(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->nama_banner = $request->nama_banner;
        $banner->status = $request->status;
        $banner->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $fotoBannerPath = public_path('assets/images/banner/' . $banner->foto_banner);

        if (file_exists($fotoBannerPath)) {
            unlink($fotoBannerPath);
        }

        $banner->delete();

        Session::flash('successDelete', 'Banner berhasil dihapus!');
        return redirect()->back();
    }
}
