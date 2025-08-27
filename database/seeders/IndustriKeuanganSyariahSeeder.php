<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndustriKeuanganSyariah;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class IndustriKeuanganSyariahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'foto' => '1. Multifinance Syariah.jpg',
                'judul' => 'Multifinance Syariah',
            ],
            // [
            //     'foto' => 'asuransi_takaful.png',
            //     'judul' => 'Asuransi Syariah (Takaful)',
            // ],
            // [
            //     'foto' => 'pasar_modal_syariah.jpg',
            //     'judul' => 'Pasar Modal Syariah',
            // ],
        ];

        $sumberPath = database_path('seeders/dummy_images/industri_keuangan_syariah');
        $tujuanFolder = 'industri_keuangan_syariah';

        IndustriKeuanganSyariah::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Industri Keuangan Syariah...');

        foreach ($items as $item) {
            $fileName = $item['foto'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item '{$item['judul']}' dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            IndustriKeuanganSyariah::create([
                'foto' => $tujuanPath,
                'judul' => $item['judul'],
            ]);

            $this->command->line("  -> Berhasil seed: {$item['judul']}");
        }

        $this->command->info('Seeding Industri Keuangan Syariah selesai.');
    }
}
