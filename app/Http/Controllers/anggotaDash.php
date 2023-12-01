<?php

namespace App\Http\Controllers;

use App\Models\DaftarBuku;
use Illuminate\Http\Request;
use App\Models\PeminjamanBuku;
use App\Models\PengembalianBuku;

class anggotaDash extends Controller
{
    public function index(){
        $id_user = Auth()->user()->id;
        $buku = DaftarBuku::all();
        $status_pinjam = PeminjamanBuku::where('status_buku', '=', 'belum')->where('id_anggota', '=', $id_user)->get();
    
        return view('Anggota.index', compact(['buku', 'status_pinjam']));
    }

    public function history(){
        $id_user = Auth()->user()->id;
        $history = PengembalianBuku::where('id_anggota', '=', $id_user)->get();
    
        return view('Anggota.history', compact('history'));
    }
}
