<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kemitraan;

class MitraController extends Controller
{
    public function index()
    {
        return view('kemitraan');
    }

    public function store(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_handphone' => 'required|string|max:20',
            'email' => 'required|email|unique:kemitraans,email',
            'alamat' => 'nullable|string',
            'jenis_kemitraan' => 'required|in:penjemputan_individu,penjemputan_organisasi,penjemputan_bisnis_tekstil',
            'armada' => 'required|in:memiliki_kendaraan,bekerja_sama',
            'keterangan' => 'nullable|string',
            'setuju_syarat' => 'required|accepted',
        ]);

        // Simpan ke database
        Kemitraan::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'no_handphone' => $validated['no_handphone'],
            'email' => $validated['email'],
            'alamat' => $validated['alamat'] ?? null,
            'jenis_kemitraan' => $validated['jenis_kemitraan'],
            'armada' => $validated['armada'],
            'keterangan' => $validated['keterangan'] ?? null,
            'setuju_syarat' => true
        ]);

        // Redirect dengan flash message
        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}
