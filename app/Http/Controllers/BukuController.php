<?php

namespace App\Http\Controllers;

use App\Models\DaftarBuku;
use App\Models\RakBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = DaftarBuku::with('rak')->get();
        return view('Admin.daftar_buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rak = RakBuku::all();
        $kodeBuku = 'A' . str_pad(DaftarBuku::max('id') + 1, 4, '0', STR_PAD_LEFT);
        return view('Admin.buku.create', compact(['rak', 'kodeBuku']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DaftarBuku::create([
            'kode_buku' => 'A' . str_pad(DaftarBuku::max('id') + 1, 4, '0', STR_PAD_LEFT),
            'judul_buku' => $request->get('judul_buku'),
            'penulis_buku' => $request->get('penulis_buku'),
            'penerbit_buku' => $request->get('penerbit_buku'),
            'tahun_penerbitan' => $request->get('tahun_penerbitan'),
            'id_rak' => $request->get('id_rak'),
        ]);

        return redirect()->route('Buku.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(DaftarBuku $Buku)
    {
        $rak = RakBuku::all();
        $kodeBuku = 'A' . str_pad(DaftarBuku::max('id') + 1, 4, '0', STR_PAD_LEFT);

        return view('Admin.buku.edit', compact(['Buku', 'rak', 'kodeBuku']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBuku $Buku)
    {
        
        $Buku->update([
            'kode_buku' => $request->get('kode_buku'),
            'judul_buku' => $request->get('judul_buku'),
            'penulis_buku' => $request->get('penulis_buku'),
            'penerbit_buku' => $request->get('penerbit_buku'),
            'tahun_penerbitan' => $request->get('tahun_penerbitan'),
            'id_rak' => $request->get('id_rak'),
        ]);
        // dd($Buku);
        return redirect()->route('Buku.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBuku $Buku)
    {
        $Buku->delete();

        return redirect()->route('Buku.index')->with('success', 'Data berhasil dihapus');
    }
}
