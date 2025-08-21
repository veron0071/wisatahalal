<?php

namespace Database\Seeders;

use App\Models\Sertifikasi;
use Carbon\Carbon; // Import Carbon untuk manipulasi tanggal
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Sertifikasi::query()->delete();

        // 2. Data untuk 11 sertifikasi
        // Kita gunakan nama UMKM yang sudah ada dari seeder sebelumnya agar konsisten
        $sertifikasis = [
            // Contoh Sertifikat Aktif
            [
                'nama_umkm' => 'Soto Ayam Pak Min',
                'nomor_sertifikat' => 'ID33240001234560123',
                'tanggal_terbit' => Carbon::now()->subYears(1), // Terbit 1 tahun yang lalu
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(3), // Kedaluwarsa 3 tahun dari sekarang
            ],
            [
                'nama_umkm' => 'Bakso Sapi Berkah',
                'nomor_sertifikat' => 'ID33240007891011124',
                'tanggal_terbit' => Carbon::now()->subMonths(6), // Terbit 6 bulan yang lalu
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(3)->addMonths(6), // Kedaluwarsa 3.5 tahun dari sekarang
            ],
            // Contoh Sertifikat Kedaluwarsa
            [
                'nama_umkm' => 'Kerajinan Batik Kendal Asli',
                'nomor_sertifikat' => 'ID33240001314151618',
                'tanggal_terbit' => Carbon::now()->subYears(5), // Terbit 5 tahun yang lalu
                'tanggal_kedaluwarsa' => Carbon::now()->subYear(), // Kedaluwarsa 1 tahun yang lalu
            ],
            [
                'nama_umkm' => 'Catering Sehat Ibu Ani',
                'nomor_sertifikat' => 'ID33240001718192021',
                'tanggal_terbit' => Carbon::now()->subMonths(2),
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(4),
            ],
            [
                'nama_umkm' => 'Oleh-oleh Bandeng Presto',
                'nomor_sertifikat' => 'ID33240002122232419',
                'tanggal_terbit' => Carbon::now()->subYears(4),
                'tanggal_kedaluwarsa' => Carbon::now()->subMonths(2), // Kedaluwarsa
            ],
            [
                'nama_umkm' => 'Jamu Tradisional Mbah Supri',
                'nomor_sertifikat' => 'ID33240002526272822',
                'tanggal_terbit' => Carbon::now()->subDays(100),
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(4)->subDays(100),
            ],
             [
                'nama_umkm' => 'Roti Bakar Premium 99',
                'nomor_sertifikat' => 'ID33240003132333423',
                'tanggal_terbit' => Carbon::createFromDate(2020, 1, 15),
                'tanggal_kedaluwarsa' => Carbon::createFromDate(2024, 1, 15), // Kedaluwarsa
            ],
            [
                'nama_umkm' => 'Peci & Busana Muslim Al-Ikhlas',
                'nomor_sertifikat' => 'ID33240003536373824',
                'tanggal_terbit' => Carbon::now()->subYear(),
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(3),
            ],
            [
                'nama_umkm' => 'Madu Murni Asli Hutan',
                'nomor_sertifikat' => 'ID33240003940414220',
                 'tanggal_terbit' => Carbon::now()->subYears(3),
                'tanggal_kedaluwarsa' => Carbon::now()->addYear(),
            ],
            [
                'nama_umkm' => 'Snack & Kue Kering Dapur Bunda',
                'nomor_sertifikat' => 'ID33240004344454622',
                'tanggal_terbit' => Carbon::now()->subMonths(1),
                'tanggal_kedaluwarsa' => Carbon::now()->addYears(4),
            ],
            [
                'nama_umkm' => 'Warung Kopi Ambyar',
                'nomor_sertifikat' => null, // Contoh tidak punya nomor
                'tanggal_terbit' => Carbon::createFromDate(2019, 5, 20),
                'tanggal_kedaluwarsa' => Carbon::createFromDate(2023, 5, 20), // Kedaluwarsa
            ],
        ];

        // 3. Proses pembuatan data
        foreach ($sertifikasis as $sertifikasiData) {
            Sertifikasi::create($sertifikasiData);
        }
    }
}
