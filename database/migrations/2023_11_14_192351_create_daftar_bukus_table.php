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
        Schema::create('daftar_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->unique();
            $table->string('judul_buku');
            $table->string('penulis_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_penerbitan');
            $table->unsignedBigInteger('id_rak');
            $table->timestamps();

            $table->foreign('id_rak')->references('id')->on('rak_buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_buku');
    }
};
