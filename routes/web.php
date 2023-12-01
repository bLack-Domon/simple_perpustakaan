<?php

use App\Http\Controllers\DataAkun;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\anggotaDash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RakController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\adminDash;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\Auth\RedirectAfterSuccess;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes([
'register' => false, // Disable Registration Routes
'reset' => false,    // Disable Password Reset Routes
'verify' => false,   // Disable Email Verification Routes
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [RedirectAfterSuccess::class, 'home']);

    Route::prefix('admin/')->middleware('cekAkun:admin')->group( function(){
        Route::get('Dashboard', [adminDash::class, 'index'])->name('adminDash');
        Route::resource('Akun', DataAkun::class);
    });
    Route::prefix('petugas/')->middleware('cekAkun:petugas')->group( function(){
        Route::get('Dashboard', [adminDash::class, 'index'])->name('petugasDash');
        Route::resource('Rak', RakController::class);
        Route::resource('Buku', BukuController::class);
        Route::resource('Peminjaman', PeminjamanController::class);
        Route::resource('Pengembalian', PengembalianController::class);
        Route::get('Pengembalian_buku/{id_peminjaman}', [PengembalianController::class, 'pengembalian_buku'])->name('ngembalikan_buku');
    });
    Route::prefix('anggota/')->middleware('cekAkun:anggota')->group( function(){
        Route::get('Dashboard', [anggotaDash::class, 'index'])->name('anggotaDash');
        Route::get('History-Peminjaman', [anggotaDash::class, 'history'])->name('anggotaHistory');
    });
});