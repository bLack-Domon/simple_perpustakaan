<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DaftarBuku;
use Illuminate\Http\Request;
use App\Models\PeminjamanBuku;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = PeminjamanBuku::where('status_buku', '=', 'belum')->get();
        return view('Admin.peminjaman', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = DaftarBuku::all();

        $anggota = User::where('status_akun', '=', 'anggota')->get();


        return view('Admin.peminjaman.create', compact(['buku', 'anggota']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cekData = PeminjamanBuku::create($request->all());

        // dd($cekData);

        return redirect()->route('Peminjaman.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
