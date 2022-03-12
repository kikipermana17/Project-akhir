<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Kategori',
            'data' => $kategori,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'List Tambah Kategori',
            'data' => $kategori,
        ], 200);

    }

    public function show($id)
    {
        // //validasi data
        // $validated = $request->validate([
        //     'nama' => 'required',
        // ]);

        $kategori = Kategori::find($id);

        return response()->json([
            'success' => true,
            'message' => 'List Tambah Kategori',
            'data' => $kategori,
        ], 200);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //validasi data
        // $validated = $request->validate([
        //     'nama' => 'required',
        // ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'List Tambah Kategori',
            'data' => $kategori,
        ], 200);

    }
}
