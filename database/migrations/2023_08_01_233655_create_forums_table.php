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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_organisasi');
            $table->string('judul_forum');
            $table->longText('isi');
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('users');
            $table->foreign('id_organisasi')->references('id')->on('organisasis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
