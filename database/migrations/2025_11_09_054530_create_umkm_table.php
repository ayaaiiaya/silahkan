<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->string('nama_umkm');
            $table->enum('skala_usaha', ['mikro', 'kecil', 'menengah']);
            $table->enum('jenis_kolaborasi', ['edukasi_sosialiasasi', 'produksi_recycle', 'event',
            'pendampingan_umkm', 'lainnya']);
            $table->text('deskripsi')->nullable();
            $table->string('lokasi');
            $table->boolean('setuju_syarat')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
