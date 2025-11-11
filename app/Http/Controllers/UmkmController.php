<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\Umkm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(){
        return view('umkm.index');
    }

    public function store(Request $request){
    $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_handphone' => 'required|string|max:20',
            'email' => 'required|email|unique:umkm,email',
            'alamat' => 'nullable|string',
            'nama_umkm' => 'required|string|max:225',
            'skala_usaha' => 'required|in:mikro,kecil,menengah',
            'jenis_kolaborasi' => 'required|in:edukasi_sosialiasasi,produksi_recycle,event,pendampingan_umkm,lainnya',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'setuju_syarat' => 'required|accepted',
        ]);

        Umkm::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'no_handphone' => $validated['no_handphone'],
            'email' => $validated['email'],
            'alamat' => $validated['alamat'] ?? null,
            'nama_umkm' => $validated['nama_umkm'],
            'skala_usaha' => $validated['skala_usaha'],
            'jenis_kolaborasi' => $validated['jenis_kolaborasi'],
            'deskripsi' => $validated['deskripsi'] ?? null,
            'lokasi' => $validated['lokasi'],
            'setuju_syarat' => true,
            'status' => 'menunggu',
        ]);

        Aktivitas::create([
            'deskripsi' => $validated['nama_lengkap'] . 'mendaftar UMKM " ' . $validated['nama_umkm']. '"',
            'kategori' => 'UMKM',
            'tanggal' => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'Pendaftaran Berhasil !!');
    }
}
