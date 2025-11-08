<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;

// Route Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route profile
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

// Route GET untuk menampilkan halaman kontak
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak.index');

// Route POST untuk memproses pengiriman form
Route::post('/kontak', [App\Http\Controllers\KontakController::class, 'submit'])->name('kontak.submit');