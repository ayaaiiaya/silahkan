<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Menampilkan halaman Kontak Kami.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Akan merender view yang ada di resources/views/kontak.blade.php
        return view('kontak.index');
    }

    /**
     * Memproses pengiriman formulir kontak (opsional).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // --- Contoh Logika Validasi dan Pengiriman ---
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Di sini Anda bisa menambahkan logika untuk:
        // 1. Mengirim email notifikasi (Mail::send(...))
        // 2. Menyimpan data ke database (ContactSubmission::create(...))

        // Setelah berhasil, arahkan kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('kontak')->with('success', 'Pesan Anda berhasil terkirim. Kami akan segera menghubungi Anda!');
    }
}