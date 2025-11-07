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
            $table->id('id_umkm');
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->text('alamat');
            $table->string('email');
            $table->enum('jenis_kolaborasi', ['edukasi_sosialisasi', 'produksi_daur ulang', 
                        'kampanye_lingkungan', 'pendampingan_umkm', 'lainnya']);
            $table->text('deskripsi');
            $table->string('lokasi');
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
