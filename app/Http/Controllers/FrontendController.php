<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use App\Models\Kategori;
use App\Models\Wisata;

class FrontendController extends Controller
{
    public function data()
    {
        $wisata = Wisata::all();
        return view('layouts.frontend', compact('wisata'));
    }

    public function index()
    {
        $biro = Biro::all();
        $wisata = Wisata::all();
        $kategori = Kategori::all();
        return view('index', compact('wisata', 'kategori', 'biro'));
    }
    public function kategori()
    {
        $biro = Biro::all();
        $wisata = Wisata::all();
        $kategori = Kategori::all();
        return view('layouts.front', compact('wisata', 'kategori', 'biro'));
    }

    public function singleblog(Wisata $wisata)
    {
        return view('blog.single', compact('wisata'));
    }
}
