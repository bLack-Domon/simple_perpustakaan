<?php

namespace App\Http\Controllers;

use App\Models\RakBuku;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d_rak = RakBuku::all();
        return view('Admin.rak_buku', compact('d_rak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
        ]);

        RakBuku::create($request->all());

        return redirect()->route('Rak.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RakBuku $Rak)
    {
        return view('Admin.rak.edit', compact('Rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RakBuku $Rak)
    {
        $Rak->update($request->all());

        return redirect()->route('Rak.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RakBuku $Rak)
    {
        $Rak->delete();

        return redirect()->route('Rak.index')->with('success', 'Data berhasil dihapus');
    }
}
