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
        Schema::create('roadmaps', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_roadmap')->nullable();
            $table->string('tahap1_tahun');
            $table->text('tahap1_deskripsi');
            $table->string('tahap2_tahun');
            $table->text('tahap2_deskripsi');
            $table->string('tahap3_tahun');
            $table->text('tahap3_deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roadmaps');
    }
};
