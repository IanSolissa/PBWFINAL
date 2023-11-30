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
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->string('file_gambar');
            $table->unsignedBigInteger('id_berita');
            $table->foreign('id_berita')->references('id')->on('beritas');
            $table->unsignedBigInteger('id_tiket')->nullable();
            $table->foreign('id_tiket')->references('id')->on('tiket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar');
    }
};
