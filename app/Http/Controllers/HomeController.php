<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use App\Models\Kategori;
use App\Models\Wisata;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::all();
        $wisata = Wisata::all();
        $biro = Biro::all();
        $kategory = DB::table('kategoris')->count();
        $wisatas = DB::table('wisatas')->count();
        $biros = DB::table('biros')->count();
        return view('home', compact('kategori', 'kategory', 'wisata', 'wisatas', 'biro', 'biros'));

    }
}
