<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use DB;
use Illuminate\Http\Request;
use Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $kategory = DB::table('kategoris')->count();
        return view('kategori.index', compact('kategori', 'kategory'));
        //Ubah json
        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Kategori',
        //     'data' => $kategori,
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        // $validation = Validator::make($Request->all(), $rules, $message);
        // if ($validation->fails()) {
        //     Alert::error('Sorry your data is invalid, please try again!', 'Oops!');
        //     return back()->withErrors($validation)->withInput();
        // }

        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama, '-');
        $kategori->save();
        // Alert::success('Data successfully saved', 'Good Job')->autoclose(1500);
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
        // $validation = Validator::make($Request->all(), $rules, $message);
        // if ($validation->fails()) {
        //     Alert::error('Sorry your data is invalid, please try again!', 'Oops!');
        //     return back()->withErrors($validation)->withInput();
        // }

        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama, '-');
        $kategori->save();
        // Alert::success('Data successfully saved', 'Good Job')->autoclose(1500);
        return redirect()->route('kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');

    }
}
