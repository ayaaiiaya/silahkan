<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UmkmController;

// Route Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route profile
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

// Route GET untuk menampilkan halaman kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// Route POST untuk memproses pengiriman form
Route::post('/kontak', [KontakController::class, 'submit'])->name('kontak.submit');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


Route::get('/kemitraan', [MitraController::class, 'index'])->name('kemitraan.index');
Route::post('/kemitraan/store', [MitraController::class, 'store'])->name('kemitraan.store');

Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi.index');
Route::post('/donasi/store', [DonasiController::class, 'store'])->name('donasi.store');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::post('/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/data', [AdminController::class, 'data'])->name('admin.data');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// ====================== ADMIN ======================
// Route halaman data UMKM
Route::get('/admin/data-umkm', [AdminController::class, 'dataUmkm'])->name('admin.umkm.index');
Route::get('/admin/data-umkm/{id}/edit', [AdminController::class, 'editUmkm'])->name('admin.umkm.edit');
Route::patch('/admin/data-umkm/{id}', [AdminController::class, 'updateUmkm'])->name('admin.umkm.update');
Route::delete('/admin/data-umkm/{id}/delete', [AdminController::class, 'deleteUmkm'])->name('admin.umkm.delete');

// Route halaman data Donasi
Route::get('/admin/data-donasi', [AdminController::class, 'dataDonasi'])->name('admin.donasi.index');
Route::get('/admin/data-donasi/{id}/edit', [AdminController::class, 'editDonasi'])->name('admin.donasi.edit');
Route::patch('/admin/data-donasi/{id}', [AdminController::class, 'updateDonasi'])->name('admin.donasi.update');
Route::delete('/admin/data-umkm/{id}/delete', [AdminController::class, 'deleteDonasi'])->name('admin.donasi.delete');

// Route halaman data kemitraan
Route::get('/admin/data-kemitraan', [AdminController::class, 'dataKemitraan'])->name('admin.kemitraan.index');
Route::get('/admin/data-kemitraan/{id}/edit', [AdminController::class, 'editKemitraan'])->name('admin.kemitraan.edit');
Route::patch('/admin/data-kemitraan/{id}', [AdminController::class, 'updateKemitraan'])->name('admin.kemitraan.update');
Route::delete('/admin/data-kemitraan/{id}/delete', [AdminController::class, 'deleteKemitraan'])->name('admin.kemitraan.delete');