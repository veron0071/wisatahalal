<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publikasi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PublikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publikasiItems = [
            // Buku
            [
                'kategori' => 'Buku',
                'nama' => 'Buku Lembaga Keuangan Mikro Syariah - M Fatchurrohman',
                'file' => 'Fatchurrohman.pdf',
            ],

            // Khazanah
            [
                'kategori' => 'Khazanah',
                'nama' => 'Khazanah Ramadhan',
                'file' => 'KhazanahRamadhan.JPG',
            ],

            // Peringatan Hari Besar
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Tahun Baru Islam',
                'file' => 'TahunBaruIslam.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Raya Idul Adha',
                'file' => 'HariRayaIdulAdha.JPG',
            ],


            // Artikel Ilmiah
            // [
            //     'kategori' => 'Artikel Ilmiah',
            //     'nama' => '#',
            //     'file' => '#',
            // ],

            // Materi Presentasi
            [
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Investasi Syariah di Pasar Modal',
                'file' => 'MateriInvestasiSyariahdiPasarModal.pdf',
            ],

            // Laporan Pertanggung Jawaban
            [
                'kategori' => 'Laporan Pertanggung Jawaban',
                'nama' => 'Laporan MUSDA PD MES Kendal Periode 2021-2024',
                'file' => 'LaporanMUSDAPDMESKendalPeriode2021-2024.pdf',
            ],
        ];

        $sumberPath = database_path('seeders/dummy_images/publikasi');
        $tujuanFolder = 'publikasi';

        Publikasi::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Publikasi...');

        foreach ($publikasiItems as $item) {
            $fileName = $item['file'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item '{$item['nama']}' dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            Publikasi::create([
                'kategori' => $item['kategori'],
                'nama' => $item['nama'],
                'file' => $tujuanPath,
            ]);

            $this->command->line("  -> Berhasil seed: {$item['nama']}");
        }

        $this->command->info('Seeding Publikasi selesai.');
    }
}
