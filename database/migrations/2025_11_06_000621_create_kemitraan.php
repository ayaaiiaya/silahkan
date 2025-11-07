<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kemitraan', function (Blueprint $table) {
            $table->id('id_kemitraan');
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->text('alamat');
            $table->string('email');
            $table->enum('jenis_kemitraan', ['penjemputan_individu', 'penjemputan_organisasi', 
            'penjemputan_bisnis_tekstil']);
            $table->enum('armada', ['memikili_kendaraan', 'bekerja_sama']);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemitraan');
    }
};
