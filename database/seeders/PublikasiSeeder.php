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
            [
                'kategori' => 'Khazanah',
                'nama' => '2. Khazanah',
                'file' => '2. Khazanah.JPG',
            ],
            [
                'kategori' => 'Khazanah',
                'nama' => '3. Khazanah',
                'file' => '3. Khazanah.JPG',
            ],
            [
                'kategori' => 'Khazanah',
                'nama' => '4. Khazanah',
                'file' => '4. Khazanah.JPG',
            ],
            [
                'kategori' => 'Khazanah',
                'nama' => '5. Khazanah',
                'file' => '5. Khazanah.JPG',
            ],

            // Peringatan Hari Besar
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Tahun Baru Islam',
                'file' => 'TahunBaruIslam.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Raya Idul fitri',
                'file' => 'HariRayaIdulfitri.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Bulan Ramadhan',
                'file' => 'BulanRamadhan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Isra Miraj',
                'file' => 'IsraMiraj.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Tahun Baru 2025',
                'file' => 'TahunBaru2025.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Guru Nasional',
                'file' => 'HariGuruNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Pahlawan',
                'file' => 'HariPahlawan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Sumpah Pemuda',
                'file' => 'hbnSumpahPemuda.JPG',
            ],[
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Maulid Nabi',
                'file' => 'MaulidNabi.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Kemerdekaan',
                'file' => 'HariKemerdekaan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'hbnHari Raya Idul Adha',
                'file' => 'hbnHariRayaIdulAdha.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Lahir Pancasila',
                'file' => 'hbnHariLahirPancasila.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'hbnHari Raya Idul Fitri',
                'file' => 'hbnHariRayaIdulFitri.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Tahun Baru 2024',
                'file' => 'TahunBaru2024.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Ibu Nasional',
                'file' => 'HariIbuNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Pahlawan Nasional',
                'file' => 'HariPahlawanNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Sumpah Pemuda',
                'file' => 'newSumpahPemuda.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Santri Nasional',
                'file' => 'HariSantriNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Bela Palestina',
                'file' => 'HariBelaPalestina.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Kesaktian Pancasila',
                'file' => 'HariKesaktianPancasila.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Maulid Nabi',
                'file' => 'hbnMaulidNabi.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Kemerdekaan',
                'file' => 'hbnHariKemerdekaan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Kemerdekaan Islam',
                'file' => 'HariKemerdekaanIslam.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Idul Adha',
                'file' => 'HariIdulAdha.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Raya Idul Fitri',
                'file' => 'newHariRayaIdulFitri.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Ramadhan',
                'file' => 'HariRamadhan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Isra Miraj',
                'file' => 'hbnIsraMiraj.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Guru Nasional',
                'file' => 'hbnHariGuruNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Pahlawan',
                'file' => 'hbnHariPahlawan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Santri Nasional',
                'file' => 'hbnHariSantriNasional.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Kemerdekaan',
                'file' => 'newHariKemerdekaan.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Maulid Nabi',
                'file' => 'newMaulidNabi.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Hari Raya Idul Adha ',
                'file' => 'HariRayaIdulAdha.JPG',
            ],
            [
                'kategori' => 'Peringatan Hari Besar',
                'nama' => 'Tahun Baru',
                'file' => 'TahunBaru.JPG',
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
            [
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Pengantar Pasar Modal Syariah',
                'file' => 'MateriPengantarPasarModalSyariah.pdf',
            ],
            [
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Kebijakan Dalam Pengembangan Sistem Jaminan Halal',
                'file' => 'MateriKebijakanDalamPengembanganSistemJaminanHalal.pdf',
            ],
            [
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Strategi Pengelolaan Investasi Syariah',
                'file' => 'MateriStrategiPengelolaanInvestasiSyariah.pdf',
            ],
            [
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Konsep Ekosistem Halal dan Relevansi Pengembangan Wisata Halal di Tingkat Lokal',
                'file' => 'MateriKonsepEkosistemHalalDanRelevansiPengembanganWisataHalalDiTingkatLokal.pdf',
            ],[
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Literasi Keuangan dan Investasi Syariah di Kalangan Gen Z',
                'file' => 'MateriLiterasiKeuanganDanInvestasiSyariahDiKalanganGenZ.pdf',
            ],[
                'kategori' => 'Materi Presentasi',
                'nama' => 'Materi Konsep Rumah Sakit Syariah',
                'file' => 'MateriKonsepRumahSakitSyariah.pdf',
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
