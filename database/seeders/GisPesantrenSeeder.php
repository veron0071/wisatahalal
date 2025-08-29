<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GisPesantren;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GisPesantrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesantrenItems = [
            [
                'foto' => '1.RPMSChapter3.JPG',
                'keterangan' => 'RPMS Chapter 3',
            ],
            [
                'foto' => '2.RpmsChapter2.JPG',
                'keterangan' => 'RPMS Chapter 2',
            ],
            [
                'foto' => '3.RpmsChapter1.JPG',
                'keterangan' => 'RPMS Chapter 1',
            ],
            [
                'foto' => '4.RpmsChapter3.JPG',
                'keterangan' => 'RPMS Chapter 3',
            ],
            [
                'foto' => '5.RpmsChapter1.JPG',
                'keterangan' => 'RPMS Chapter 1',
            ],
            [
                'foto' => '6.RpmsChapter1.JPG',
                'keterangan' => 'RPMS Chapter 1',
            ],
        ];

        $sumberPath = database_path('seeders/dummy_images/gis_pesantren');
        $tujuanFolder = 'gis_pesantren';

        GisPesantren::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Galeri Pesantren...');

        foreach ($pesantrenItems as $item) {
            $fileName = $item['foto'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item '{$item['keterangan']}' dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            GisPesantren::create([
                'foto' => $tujuanPath,
                'keterangan' => $item['keterangan'],
            ]);

            $this->command->line("  -> Berhasil seed: {$item['keterangan']}");
        }

        $this->command->info('Seeding Galeri Pesantren selesai.');
    }
}
