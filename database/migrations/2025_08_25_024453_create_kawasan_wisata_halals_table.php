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
        Schema::create('kawasan_wisata_halals', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah_perkembangan')->nullable();
            $table->text('fasilitas_kondisi')->nullable();
            $table->string('lokasi_gmaps')->nullable();
            $table->string('link_umkm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kawasan_wisata_halals');
    }
};
