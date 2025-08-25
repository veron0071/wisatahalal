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
        Schema::create('publikasis', function (Blueprint $table) {
            $table->id();
             $table->enum('kategori', [
                'Buku',
                'Khazanah',
                'Peringatan Hari Besar',
                'Artikel Ilmiah',
                'Materi Presentasi',
                'Laporan Pertanggung Jawaban'
            ]);
            $table->string('nama');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasis');
    }
};
