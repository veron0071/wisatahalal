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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_usaha');
            $table->text('nama_pemilik'); // Assuming 'lokasi' is a field you want to add
            $table->text('deskripsi_produk')->nullable(); // Assuming 'deskripsi' is a field you want to add
            $table->string('foto')->nullable(); // Assuming 'foto' is a field you want to add
            $table->string('lokasi')->nullable(); // Assuming 'kontak' is a field you want to add
            $table->string('sertifikast_halal')->nullable(); // Assuming 'jenis' is a field you want to add
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
    