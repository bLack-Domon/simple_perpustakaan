<?php

namespace App\Models;

use App\Models\User;
use App\Models\DaftarBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengembalianBuku extends Model
{
    use HasFactory;

    protected $table = 'pengembalian_buku'; 
    
    protected $fillable = [
     'tanggal_pengembalian', 
     'denda', 
     'id_buku', 
     'id_anggota', 
     'id_petugas', 
    ];

    /**
     * Get the user that owns the PengembalianBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function koneksi_buku()
    {
        return $this->belongsTo(DaftarBuku::class, 'id_buku', 'id');
    }
    public function anggota()
    {
        return $this->belongsTo(User::class, 'id_anggota', 'id');
    }
    public function petugas()
    {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
}
