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
        Schema::create('pengembalian_buku', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengembalian');
            $table->string('denda')->default('0');
            $table->unsignedBigInteger('id_buku');
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_petugas');
            $table->timestamps();

            $table->foreign('id_buku')->references('id')->on('daftar_buku');
            $table->foreign('id_anggota')->references('id')->on('users');
            $table->foreign('id_petugas')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian_buku');
    }
};
