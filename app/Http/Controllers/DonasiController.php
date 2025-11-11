<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use App\Models\Donasi;
use Carbon\Carbon;

class DonasiController extends Controller
{
    public function index(){
        return view('donasi.index');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_handphone' => 'required|string|max:20',
            'email' => 'required|email|unique:kemitraans,email',
            'alamat' => 'nullable|string',
            'jenis_donasi' => 'required|in:kain_perca,pakaian_layak,bahan_tekstil,campuran',
            'cara_donasi' => 'required|in:diantar,dijemput',
            'keterangan' => 'nullable|string',
        ]);

        Donasi::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'no_handphone' => $validated['no_handphone'],
            'email' => $validated['email'],
            'alamat' => $validated['alamat'] ?? null,
            'jenis_donasi' => $validated['jenis_donasi'],
            'cara_donasi' => $validated['cara_donasi'],
            'keterangan' => $validated['keterangan'] ?? null,
            'status' => 'menunggu',
        ]);
        $jenisLabels = [
            'kain_perca' => 'Kain Perca',
            'pakaian_layak' => 'Pakaian Layak',
            'bahan_tekstil' => 'Bahan Tekstil',
            'campuran' => 'Campuran',
        ];
        $jenisLabel = $jenisLabels[$validated['jenis_donasi']] ?? $validated['jenis_donasi'];

        // Simpan aktivitas
        Aktivitas::create([
            'deskripsi' => $validated['nama_lengkap'] . ' mendonasikan ' . $jenisLabel,
            'kategori' => 'Donasi',
            'tanggal' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Donasi berhasil dibuat!');
    }
}
