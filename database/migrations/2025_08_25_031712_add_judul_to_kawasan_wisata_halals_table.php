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
        Schema::table('kawasan_wisata_halals', function (Blueprint $table) {
            $table->string('judul')->after('id'); // Tambah kolom judul
        });
    }

    public function down(): void
    {
        Schema::table('kawasan_wisata_halals', function (Blueprint $table) {
            $table->dropColumn('judul');
        });
    }
};
