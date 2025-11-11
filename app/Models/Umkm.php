<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    
    protected $table = 'umkm';

    protected $fillable = [
        'nama_lengkap',
        'no_handphone',
        'email',
        'alamat',
        'nama_umkm',
        'skala_usaha',
        'jenis_kolaborasi',
        'deskripsi',
        'lokasi',
        'setuju_syarat',
        'status',
    ];
}
