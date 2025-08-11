<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('sertifikasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_umkm');
        $table->string('nomor_sertifikat')->nullable();
        $table->date('tanggal_terbit')->nullable();
        $table->date('tanggal_kedaluwarsa')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasis');
    }
};
