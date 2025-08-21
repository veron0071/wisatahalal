<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data dan file lama
        Umkm::query()->delete();
        Storage::disk('public')->deleteDirectory('umkm');

        // 2. Tentukan path
        $sourcePath = database_path('seeders/dummy_images/umkm');
        $destinationPath = 'umkm/fotos'; // Simpan foto di subfolder agar rapi
        Storage::disk('public')->makeDirectory($destinationPath);

        // 3. Data untuk 11 UMKM
        $umkms = [
            ['nama_usaha' => 'Soto Ayam Pak Min', 'pemilik' => 'Bapak Minto', 'lokasi' => 'Jl. Pahlawan No. 1'],
            ['nama_usaha' => 'Bakso Sapi Berkah', 'pemilik' => 'Ibu Siti', 'lokasi' => 'Jl. Merdeka No. 22'],
            ['nama_usaha' => 'Kerajinan Batik Kendal Asli', 'pemilik' => 'Keluarga Hartono', 'lokasi' => 'Pusat Kerajinan Kaliwungu'],
            ['nama_usaha' => 'Warung Kopi Ambyar', 'pemilik' => 'Mas Doni', 'lokasi' => 'Alun-alun Kendal'],
            ['nama_usaha' => 'Catering Sehat Ibu Ani', 'pemilik' => 'Ibu Ani', 'lokasi' => 'Perumahan Cendana Blok A5'],
            ['nama_usaha' => 'Oleh-oleh Bandeng Presto', 'pemilik' => 'Bapak Susilo', 'lokasi' => 'Jl. Raya Weleri'],
            ['nama_usaha' => 'Jamu Tradisional Mbah Supri', 'pemilik' => 'Mbah Supri', 'lokasi' => 'Pasar Pagi Kendal'],
            ['nama_usaha' => 'Roti Bakar Premium 99', 'pemilik' => 'Kak Bima', 'lokasi' => 'Depan Stadion Kendal'],
            ['nama_usaha' => 'Peci & Busana Muslim Al-Ikhlas', 'pemilik' => 'Haji Ridwan', 'lokasi' => 'Kompleks Masjid Agung'],
            ['nama_usaha' => 'Madu Murni Asli Hutan', 'pemilik' => 'Kelompok Tani Madu', 'lokasi' => 'Desa Sukorejo'],
            ['nama_usaha' => 'Snack & Kue Kering Dapur Bunda', 'pemilik' => 'Bunda Rina', 'lokasi' => 'Jl. Tentara Pelajar No. 7'],
        ];

        // 4. Proses penyalinan file dan pembuatan data
        foreach ($umkms as $index => $umkmData) {
            $sourceFile = $sourcePath . '/seeder.png';

            // Membuat nama file tujuan yang unik
            $uniqueName = 'seeder-' . ($index + 1) . '-' . uniqid() . '.png';
            $destinationFile = $destinationPath . '/' . $uniqueName;

            // Salin file sumber ke public storage jika ada
            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            // Buat record di database
            Umkm::create([
                'nama_usaha' => $umkmData['nama_usaha'],
                'nama_pemilik' => $umkmData['pemilik'],
                'lokasi' => $umkmData['lokasi'],
                'deskripsi_produk' => 'Ini adalah deskripsi default untuk produk UMKM. Informasi lebih detail akan ditambahkan oleh admin.',
                'sertifikat_halal' => false, // Untuk data contoh, kita anggap semua belum memiliki sertifikat
                'file_sertifikat' => null,
                'foto' => $destinationFile
            ]);
        }
    }
}
