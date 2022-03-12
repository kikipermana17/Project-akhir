<?php

namespace App\Http\Controllers;

use App\Models\Biro;

use Illuminate\Http\Request;

class BiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biro = Biro::all();
        return view('biro.index', compact('biro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biro.create');
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
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);

        $biro = new Biro;
        $biro->nama = $request->nama;
        $biro->alamat = $request->alamat;
        $biro->telpon = $request->telpon;
        $biro->save();
        return redirect()->route('biro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biro  $biro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biro = Biro::findOrFail($id);
        return view('biro.show', compact('biro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biro  $biro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biro = Biro::findOrFail($id);
        return view('biro.edit', compact('biro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biro  $biro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);

        $biro = Biro::findOrFail($id);
        $biro->nama = $request->nama;
        $biro->alamat = $request->alamat;
        $biro->telpon = $request->telpon;
        $biro->save();
        return redirect()->route('biro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biro  $biro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biro = Biro::findOrFail($id);
        $biro->delete();
        return redirect()->route('biro.index');
    }
}
