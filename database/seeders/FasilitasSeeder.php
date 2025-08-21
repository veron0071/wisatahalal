<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data dan file lama
        Fasilitas::query()->delete();
        Storage::disk('public')->deleteDirectory('fasilitas');

        // 2. Tentukan path
        $sourcePath = database_path('seeders/dummy_images/fasilitas');
        $destinationPath = 'fasilitas';
        Storage::disk('public')->makeDirectory($destinationPath);

        // 3. Data untuk 11 fasilitas
        $fasilitass = [
            ['nama' => 'Masjid Agung Al-Muttaqin', 'lokasi' => 'Pusat Kota Kendal'],
            ['nama' => 'Pondok Pesantren Al-Hidayah', 'lokasi' => 'Kecamatan Kaliwungu'],
            ['nama' => 'Resto Halal Barokah', 'lokasi' => 'Jalur Pantura'],
            ['nama' => 'Taman Religi Jabal Nur', 'lokasi' => 'Area Perbukitan'],
            ['nama' => 'Perpustakaan Islam Terpadu', 'lokasi' => 'Kompleks Pendidikan'],
            ['nama' => 'Klinik Kesehatan Syariah', 'lokasi' => 'Pusat Pelayanan Medis'],
            ['nama' => 'Aula Serbaguna Umat', 'lokasi' => 'Pusat Kegiatan Masyarakat'],
            ['nama' => 'Toko Buku & Kitab Islami', 'lokasi' => 'Area Komersial'],
            ['nama' => 'Pusat Oleh-Oleh Halal', 'lokasi' => 'Dekat Gerbang Tol'],
            ['nama' => 'Penginapan Syariah Ar-Rahman', 'lokasi' => 'Jalan Utama'],
            ['nama' => 'Area Parkir Luas & Aman', 'lokasi' => 'Seluruh Kawasan Wisata'],
        ];

        // 4. Proses penyalinan file dan pembuatan data
        foreach ($fasilitass as $index => $fasilitasData) {
            $sourceFile = $sourcePath . '/seeder.png';

            // Membuat nama file tujuan yang unik
            $uniqueName = 'seeder-' . ($index + 1) . '-' . uniqid() . '.png';
            $destinationFile = $destinationPath . '/' . $uniqueName;

            // Salin file sumber ke public storage jika ada
            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            // Buat record di database
            Fasilitas::create([
                'nama_fasilitas' => $fasilitasData['nama'],
                'lokasi' => $fasilitasData['lokasi'],
                'deskripsi' => 'Ini adalah deskripsi default untuk fasilitas. Informasi lebih lengkap mengenai fasilitas ini akan diperbarui kemudian oleh admin.',
                'foto' => $destinationFile
            ]);
        }
    }
}
