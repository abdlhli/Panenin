<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $banners = Banner::all();

        return view('landingpage', [
            'banners' => $banners
        ]);
    }
}
