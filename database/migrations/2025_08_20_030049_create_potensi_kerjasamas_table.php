<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PotensiKerjasama;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('potensi_kerjasamas', function (Blueprint $table) {
            $table->id();
             $table->string('kategori_mitra');
            $table->text('mitra_potensial');
            $table->text('isu_need_utama');
            $table->text('nilai_tambah_pd_mes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi_kerjasamas');
    }
};
