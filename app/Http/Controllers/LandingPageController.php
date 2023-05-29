<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $product = Produk::take(9)->get();

        return view('landingpage', [
            'banners' => $banners,
            'product' => $product
        ]);
    }
}
