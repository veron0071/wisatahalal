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
        Schema::table('ziarahs', function (Blueprint $table) {
            $table->text('google_maps_link')->nullable()->after('deskripsi');

            // Menghapus kolom lama
            $table->dropColumn(['latitude', 'longitude']);
        });
    }

    public function down(): void
    {
        Schema::table('ziarahs', function (Blueprint $table) {
            $table->dropColumn('google_maps_link');
            $table->string('latitude');
            $table->string('longitude');
        });
    }
};
