<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';

    protected $fillable = [
        'nama_lengkap',
        'no_handphone',
        'email',
        'alamat',
        'jenis_donasi',
        'cara_donasi',
        'keterangan',
        'status',
    ];
}
