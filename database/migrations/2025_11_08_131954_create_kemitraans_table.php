<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemitraansTable extends Migration
{
    public function up()
    {
        Schema::create('kemitraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_handphone');
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->enum('jenis_kemitraan', ['penjemputan_individu', 'penjemputan_organisasi', 'penjemputan_bisnis_tekstil']);
            $table->enum('armada', ['memiliki_kendaraan', 'bekerja_sama']);
            $table->text('keterangan')->nullable();
            $table->boolean('setuju_syarat')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kemitraans');
    }
}
