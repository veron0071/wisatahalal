<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OpiniBerita;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OpiniBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'nama' => 'Press Release PkM Unwahas dan PD MES Kendal di Jabal Nur Kaliwungu Selatan',
                'file' => '1. Press Release PkM Unwahas dan PD MES Kendal di Jabal Nur Kaliwungu Selatan.docx',
            ],
            // [
            //     'nama' => '',
            //     'file' => '',
            // ],
            // [
            //     'nama' => '',
            //     'file' => '',
            // ],
        ];

        $sumberPath = database_path('seeders/dummy_images/opini_berita');
        $tujuanFolder = 'opini-berita';

        // Bersihkan data lama
        OpiniBerita::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Opini & Berita...');

        foreach ($items as $item) {
            $fileName = $item['file'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item '{$item['nama']}' dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            OpiniBerita::create([
                'nama' => $item['nama'],
                'file' => $tujuanPath,
            ]);

            $this->command->line("  -> Berhasil seed: {$item['nama']}");
        }

        $this->command->info('Seeding Opini & Berita selesai.');
    }
}
