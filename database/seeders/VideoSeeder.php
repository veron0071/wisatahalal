<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Video::query()->delete();

        // 2. Data untuk 11 video
        $videos = [
            ['judul' => 'Profil Singkat Wisata Halal Jabal Nur', 'kategori' => 'Dokumenter'],
            ['judul' => 'Kajian Rutin: Memahami Konsep Halal & Haram', 'kategori' => 'Kajian'],
            ['judul' => 'Jejak Sejarah Para Wali di Kendal', 'kategori' => 'Sejarah'],
            ['judul' => 'Tutorial Membuat Produk UMKM Bersertifikat Halal', 'kategori' => 'Edukasi'],
            ['judul' => 'Liputan Acara Festival Kuliner Halal 2025', 'kategori' => 'Event'],
            ['judul' => 'Wawancara Eksklusif dengan Ketua PD MES Kendal', 'kategori' => 'Wawancara'],
            ['judul' => 'Keindahan Tersembunyi di Jalur Ziarah Pantura', 'kategori' => 'Pariwisata'],
            ['judul' => 'Pentingnya Literasi Keuangan Syariah', 'kategori' => 'Edukasi'],
            ['judul' => 'Highlight Program Kerja MES Kendal', 'kategori' => 'Dokumenter'],
            ['judul' => 'Kisah Sukses UMKM Binaan', 'kategori' => 'Inspirasi'],
            ['judul' => 'Pengumuman Pemenang Lomba Video Kreatif', 'kategori' => 'Event'],
        ];

        // 3. Proses pembuatan data
        foreach ($videos as $videoData) {
            Video::create([
                'judul' => $videoData['judul'],
                'kategori' => $videoData['kategori'],
                'deskripsi' => 'Ini adalah deskripsi default untuk video. Ringkasan atau informasi lebih lanjut akan ditambahkan oleh admin.',
                // Link video YouTube placeholder yang sama untuk semua data
                'video_url' => 'https://www.youtube.com/watch?v=WrknoSA2APX5KAyX'
            ]);
        }
    }
}
