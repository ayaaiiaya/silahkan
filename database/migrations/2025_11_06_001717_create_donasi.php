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
            $table->id('id_donasi');
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->text('alamat');
            $table->string('email');
            $table->enum('jenis_donasi', ['kain_perca', 'pakaian_layak', 'bahan_tekstil', 'campuran']);
            $table->enum('cara_penyaluran', ['diantar', 'dijemput']);
            $table->text('keterangan');
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
