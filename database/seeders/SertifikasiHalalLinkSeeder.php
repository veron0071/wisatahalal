<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SertifikasiHalalLink; // Pastikan path model ini benar

class SertifikasiHalalLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SertifikasiHalalLink::truncate();

        SertifikasiHalalLink::create([
            'alur_sertifikasi_url'      => 'https://bpjph.halal.go.id/detail/sertifikasi-halal',
            'persyaratan_url'           => 'https://bpjph.halal.go.id/detail/informasi-1',
            'ptps_sihalal_url'          => 'https://ptsp.halal.go.id/login',
            'pencarian_produk_url'      => 'https://bpjph.halal.go.id/',
            'modul_self_declare_url'    => 'https://cmsbl.halal.go.id/uploads/Manual_Self_Declare_43a597d518.pdf',
            'modul_reguler_url'         => 'https://cmsbl.halal.go.id/uploads/Manual_Book_SIHALAL_SH_Reguler_f8e1cb4f87.pdf',
        ]);

        $this->command->info('Seeding link Sertifikasi Halal selesai.');
    }
}
