<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Aktivitas;
use App\Models\Donasi;
use App\Models\Kemitraan;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Halaman login admin
    public function index()
    {
        return view('admin.login'); // pastikan file ini ada di resources/views/admin/login.blade.php
    }

    // Proses login
    public function data(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah username ada di tabel admin
        $admin = Admin::where('username', $request->username)->first();

        if (!$admin) {
            return back()->with(['loginError' => 'Username tidak ditemukan']);
        }

        // Cek password
        if (!Hash::check($request->password, $admin->password)) {
            return back()->with(['loginError' => 'Password salah']);
        }

        // Simpan data admin di session
        session([
            'admin_id' => $admin->id,
            'admin_username' => $admin->username,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Berhasil login sebagai admin');
    }

    // Dashboard (bisa juga pakai middleware custom)
    public function dashboard()
    {
        $kemitraan = Kemitraan::all()->count();

        $donasi = Donasi::all()->count();

        $umkm = Umkm::all()->count();

        $aktivitas = Aktivitas::orderBy('tanggal', 'desc')->take(5)->get();

        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu');
        }

         return view('admin.dashboard', ['kemitraan' => $kemitraan, 'donasi' => $donasi, 'umkm' => $umkm, 'aktivitas' => $aktivitas]);
    }

    // ===== Data Kemitraan ===== //
    public function dataKemitraan(){
        $kemitraan = Kemitraan::orderBy('created_at', 'desc')->get();
        return view('admin.kemitraan.index', compact('kemitraan'));
    }

    public function editKemitraan($id){
        $kemitraan = Kemitraan::where('id', $id)->first();
        return view('admin.kemitraan.edit', ['kemitraan' => $kemitraan]);
    }

    public function updateKemitraan(Request $request, $id){
        $request->validate([
            'status' => 'required|in:menunggu,diterima,ditolak',
        ]);

        $kemitraan = Kemitraan::findOrFail($id);
        $kemitraan->status = $request->status;
        $kemitraan->save();

        return redirect()->route('admin.kemitraan.index')->with('success', 'Status donasi berhasil diupdate!');
    }

    public function deleteKemitraan($id){
        $kemitraan = Kemitraan::findOrFail($id);
        $kemitraan->delete();

        return redirect()->route('admin.kemitraan.index')->with('success', 'Data Umkm Berhasil Di hapus');
    }


    // ===== Data Donasi ===== //
    public function dataDonasi(){
        $donasi = Donasi::orderBy('created_at', 'desc')->get();
        return view('admin.donasi.index', compact('donasi'));
    }

    public function editDonasi($id){
        $donasi = Donasi::where('id', $id)->first();
        return view('admin.donasi.edit', ['donasi' => $donasi]);
    }

    public function updateDonasi(Request $request, $id){
        $request->validate([
            'status' => 'required|in:menunggu,disetujui,ditolak',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->status = $request->status;
        $donasi->save();

        return redirect()->route('admin.donasi.index')->with('success', 'Status donasi berhasil diupdate!');
    }
    public function deleteDonasi($id){
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return redirect()->route('admin.donasi.index')->with('success', 'Data Umkm Berhasil Di hapus');
    }

    // ===== Data UMKM ===== //
    public function dataUmkm()
    {
        $umkm = Umkm::orderBy('created_at', 'desc')->get();
        return view('admin.umkm.index', compact('umkm'));
    }

    public function editUmkm($id){
        $umkm = Umkm::where('id', $id)->first();

        return view('admin.umkm.edit', ['umkm' => $umkm]);
    }

    public function updateUmkm(Request $request, $id){
        $data = $request->all();

        $umkm = Umkm::find($id);

        $umkm->update([
            'status' => $data['status'],
        ]);

        return redirect()->route('admin.umkm.index');
    }

    public function deleteUmkm($id){
        $umkm = Umkm::findOrFail($id);
        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'Data Umkm Berhasil Di hapus');
    }
    // Logout
    public function logout()
    {
        session()->forget(['admin_id', 'admin_username']);
        return redirect()->route('admin.login')->with('success', 'Anda telah logout');
    }
}
