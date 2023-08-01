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
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_organisasi');
            $table->unsignedBigInteger('id_forum');
            $table->longText('isi');
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('users');
            $table->foreign('id_organisasi')->references('id')->on('organisasis');
            $table->foreign('id_forum')->references('id')->on('forums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};
