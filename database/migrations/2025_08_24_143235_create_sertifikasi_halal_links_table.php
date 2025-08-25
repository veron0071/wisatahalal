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
        Schema::create('sertifikasi_halal_links', function (Blueprint $table) {
            $table->id();
            $table->string('alur_sertifikasi_url');
            $table->string('persyaratan_url');
            $table->string('ptps_sihalal_url');
            $table->string('pencarian_produk_url');
            $table->string('modul_self_declare_url');
            $table->string('modul_reguler_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasi_halal_links');
    }
};
