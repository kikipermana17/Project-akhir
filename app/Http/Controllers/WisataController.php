<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $biro = Biro::all();
        return view('wisata.create', compact('kategori', 'biro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = Validator::make($Request->all(), $rules, $message);
        // if ($validation->fails()) {
        //     Alert::error('Sorry your data is invalid, please try again!', 'Oops!');
        //     return back()->withErrors($validation)->withInput();
        // }

        $wisata = new Wisata;
        $wisata->kategori_id = $request->kategori_id;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->alamat = $request->alamat;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->fasilitas = $request->fasilitas;
        $wisata->biro_id = $request->biro_id;
        $wisata->cover = $request->cover;
        $wisata->slug = Str::slug($request->nama_wisata, '-');
        // upload image / foto
        if ($request->hasFile('cover')) {
            $wisata->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/wisata/', $name);
            $wisata->cover = $name;
        }
        $wisata->save();
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Berhasil menyimpan"
        // ]);
        // Alert::success('Data successfully saved', 'Good Job')->autoclose(1500);
        return redirect()->route('wisata.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $wisata = Wisata::findOrFail($id);
        return view('wisata.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $biro = Biro::all();
        $wisata = Wisata::findOrFail($id);
        return view('wisata.edit', compact('wisata', 'kategori', 'biro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // //validasi data
        // $validation = Validator::make($Request->all(), $rules, $message);
        // if ($validation->fails()) {
        //     Alert::error('Sorry your data is invalid, please try again!', 'Oops!');
        //     return back()->withErrors($validation)->withInput();
        // }
        //Validasi
            // $validated = $request->validate([
            //     'kategori_id' => 'required',
            //     'nama_wisata' => 'required',
            //     'alamat' => 'required',
            //     'deskripsi' => 'required',
            //     'fasilitas' => 'required',
            //     'biro_id' => 'required',
            //     'cover' => 'required',
            //     'slug' => 'required',
            // ]);

        // $wisata = new Wisata;
        $wisata = Wisata::findOrFail($id);
        $wisata->kategori_id = $request->kategori_id;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->alamat = $request->alamat;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->fasilitas = $request->fasilitas;
        $wisata->biro_id = $request->biro_id;
        $wisata->cover = $request->cover;
        $wisata->slug = Str::slug($request->nama_wisata);
        // upload image / foto
        if ($request->hasFile('cover')) {
            $wisata->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/wisata/', $name);
            $wisata->cover = $name;
        }
        $wisata->save();
        // Alert::success('Data successfully saved', 'Good Job')->autoclose(1500);
        return redirect()->route('wisata.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
