<?php

namespace App\Models;

use App\Models\User;
use App\Models\DaftarBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeminjamanBuku extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_buku'; 
    
    protected $fillable = [
     'tanggal_pinjam', 
     'tanggal_kembali', 
     'status_buku', 
     'id_buku', 
     'id_anggota', 
     'id_petugas', 
    ];

    
    /**
     * Get the user that owns the DaftarBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku()
    {
        return $this->belongsTo(DaftarBuku::class, 'id_buku', 'id');
    }
    
    /**
     * Get the user that owns the DaftarBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anggota()
    {
        return $this->belongsTo(User::class, 'id_anggota', 'id');
    }
    
    /**
     * Get the user that owns the DaftarBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function petugas()
    {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
}
