<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MitraController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


Route::get('/kemitraan', [MitraController::class, 'index'])->name('kemitraan.index');
Route::post('/kemitraan/store', [MitraController::class, 'store'])->name('kemitraan.store');
