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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->string('nama_organisasi');
            $table->string('jumlah_anggota');
            $table->longText('struktur');
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasis');
    }
};
