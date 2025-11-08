<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemitraan extends Model
{
    use HasFactory;
use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'no_handphone',
        'email',
        'alamat',
        'jenis_kemitraan',
        'armada',
        'keterangan',
        'setuju_syarat',
    ];
}
