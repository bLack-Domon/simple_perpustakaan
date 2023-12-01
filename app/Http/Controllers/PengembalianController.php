<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DaftarBuku;
use Illuminate\Http\Request;
use App\Models\PeminjamanBuku;
use App\Models\PengembalianBuku;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kembali = PengembalianBuku::all();
        return view('Admin.pengembalian', compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function pengembalian_buku(PeminjamanBuku $id_peminjaman){
        $buku = DaftarBuku::where('id', '=', $id_peminjaman->id_buku)->first();
        $anggota = User::where('id', '=', $id_peminjaman->id_anggota)->first();

        // dd($buku);
        return view('Admin.pengembalian.create', compact(['id_peminjaman', 'buku', 'anggota']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PengembalianBuku::create([
            'tanggal_pengembalian' => $request->get('tanggal_pengembalian'),
            'denda' => $request->get('denda'),
            'id_buku' => $request->get('id_buku'),
            'id_anggota' => $request->get('id_anggota'),
            'id_petugas' => $request->get('id_petugas'),
        ]);

        $id_pinjam = $request->get('id_peminjaman');
        // Panggil data peminjaman berdasarkan ID (misal: 1)
        $peminjaman = PeminjamanBuku::find($id_pinjam);

        // Ubah status peminjaman menjadi "Dikembalikan"
        $peminjaman->status_buku = "sudah";

        // Simpan perubahan
        $peminjaman->save();

        return redirect()->route('Pengembalian.index')->with('success', 'Data berhasil ditambahkan');
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
