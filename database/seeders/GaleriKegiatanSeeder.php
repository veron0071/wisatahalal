<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galeriItems = [
            [
                'foto' => '1.jpg',
                'keterangan' => 'Sosialisasi Kawasan Wisata Halal Jabal Nur',
            ],
            [
                'foto' => '2.JPG',
                'keterangan' => 'Shering Sesion',
            ],
            [
                'foto' => '3.jpg',
                'keterangan' => 'Multifinance Syariah',
            ],
        ];

        $sumberPath = database_path('seeders/dummy_images/galeri_kegiatan');
        $tujuanFolder = 'galeri_kegiatan';

        Galeri::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Galeri Kegiatan...');

        foreach ($galeriItems as $item) {
            $fileName = $item['foto'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            Galeri::create([
                'foto' => $tujuanPath,
                'keterangan' => $item['keterangan'],
            ]);

            $this->command->line("  -> Berhasil seed: {$item['keterangan']}");
        }

        $this->command->info('Seeding Galeri Kegiatan selesai.');
    }
}
