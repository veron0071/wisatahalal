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
        Schema::create('profil_lembagas', function (Blueprint $table) {
            $table->id();
            $table->text('pendahuluan');
            $table->text('tujuan_manfaat');
            $table->text('target');
            $table->text('legal_formal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_lembagas');
    }
};
