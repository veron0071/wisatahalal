<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->boolean('sertifikat_halal')->default(false)->change();
            $table->string('file_sertifikat')->nullable()->after('foto');
        });
    }

    public function down(): void
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->string('sertifikat_halal')->nullable()->change();
            $table->dropColumn('file_sertifikat');
        });
    }
};
