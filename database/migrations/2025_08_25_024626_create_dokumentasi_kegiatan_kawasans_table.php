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
        Schema::create('dokumentasi_kegiatan_kawasans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kawasan_wisata_halal_id')->constrained()->onDelete('cascade');
            $table->string('file_path');
            $table->string('file_type')->default('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasi_kegiatan_kawasans');
    }
};
