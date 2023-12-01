<?php

namespace App\Models;

use App\Models\DaftarBuku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;
    
    protected $table = 'rak_buku';

    protected $fillable = [
     'nama_rak', 
     'lokasi_rak', 
    ];
}
