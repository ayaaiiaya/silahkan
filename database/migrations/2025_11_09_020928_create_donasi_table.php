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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->enum('jenis_donasi', ['kain_perca', 'pakaian_layak', 'bahan_tekstil', 'campuran']);
            $table->enum('cara_donasi', ['diantar', 'dijemput']);
            $table->text('keterangan')->nullable();
            $table->enum('status', ['menunggu','disetujui','ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi');
    }
};
