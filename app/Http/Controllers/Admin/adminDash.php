<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DaftarBuku;
use Illuminate\Http\Request;
use App\Models\PeminjamanBuku;
use App\Http\Controllers\Controller;

class adminDash extends Controller
{
    public function index(){

        $totalAnggota = User::where('status_akun', '=', 'anggota')->count();
        $totalPetugas = User::where('status_akun', '=', 'petugas')->count();
        $totalBuku = DaftarBuku::count();
        $totalPeminjaman = PeminjamanBuku::count();
        return view('admin', compact(
        [
            'totalAnggota',
            'totalPetugas',
            'totalBuku',
            'totalPeminjaman',
        ]));
    }
}
