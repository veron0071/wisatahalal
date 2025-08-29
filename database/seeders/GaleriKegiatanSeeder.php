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
            [
                'foto' => '4.JPG',
                'keterangan' => 'Bagi Takjil dan Buka Bersama',
            ],
            [
                'foto' => '5.JPG',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '6.jpg',
                'keterangan' => 'Workshop Literasi Keuangan Syariah',
            ],
            [
                'foto' => '7.jpg',
                'keterangan' => 'RPMS Chapter 3',
            ],
            [
                'foto' => '8.JPG',
                'keterangan' => 'MUSDA MES Kendal',
            ],
            [
                'foto' => '9.jpg',
                'keterangan' => 'FLWF Chapter Kendal',
            ],
            [
                'foto' => '10.jpg',
                'keterangan' => 'RPMS Chapter 2',
            ],
            [
                'foto' => '11.JPG',
                'keterangan' => 'RPMS Chapter 1',
            ],
            [
                'foto' => '12.jpg',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '13.jpg',
                'keterangan' => 'Diskusi Ekonomi',
            ],
            [
                'foto' => '14.JPG',
                'keterangan' => 'Ngopi Investor Halal Kendal',
            ],
            [
                'foto' => '15.jpg',
                'keterangan' => 'Selapanan dan Kunjungan Ormawa',
            ],
            [
                'foto' => '16.jpg',
                'keterangan' => 'WPMS Chapter Kendal',
            ],
            [
                'foto' => '17.JPG',
                'keterangan' => 'RPMS Chapter 3',
            ],
            [
                'foto' => '18.jpg',
                'keterangan' => 'Diskusi Interaktif',
            ],
            [
                'foto' => '19.jpg',
                'keterangan' => 'RPMS Chapter 2',
            ],
            [
                'foto' => '20.JPG',
                'keterangan' => 'Open Donasi Qurban',
            ],
            [
                'foto' => '21.jpg',
                'keterangan' => 'RPMS Chapter 1',
            ],
            [
                'foto' => '22.jpg',
                'keterangan' => 'Semnas dan Laounching Gis Pesantren',
            ],
            [
                'foto' => '23.JPG',
                'keterangan' => 'Workshop Wirausaha Santri',
            ],
            [
                'foto' => '24.jpg',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '25.JPG',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '26.jpg',
                'keterangan' => 'Dialog Interaktif',
            ],
            [
                'foto' => '27.jpg',
                'keterangan' => 'Bimtek Sertifikasi Halal',
            ],
            [
                'foto' => '28.JPG',
                'keterangan' => 'Program Sertifikasi Halal Gratis',
            ],
            [
                'foto' => '29.jpg',
                'keterangan' => 'Dialog Interaktif',
            ],
            [
                'foto' => '30.jpg',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '31.JPG',
                'keterangan' => 'Ngumpul Manfaat',
            ],
            [
                'foto' => '32.jpg',
                'keterangan' => 'Dialog Interaktif',
            ],
            [
                'foto' => '33.jpg',
                'keterangan' => 'Sarasehan Jurnalis',
            ],
            [
                'foto' => '34.JPG',
                'keterangan' => 'Pelantikan dan Raker Pengurus',
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
