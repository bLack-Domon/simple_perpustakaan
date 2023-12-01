<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBuku extends Model
{
    use HasFactory;

    protected $table = 'daftar_buku';
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_penerbitan',
        'id_rak',
    ];

    /**
     * Get the user that owns the DaftarBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rak()
    {
        return $this->belongsTo(RakBuku::class, 'id_rak', 'id');
    }
}
