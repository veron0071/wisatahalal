<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data dan file lama
        Post::query()->delete();
        Storage::disk('public')->deleteDirectory('posts');

        // 2. Tentukan path
        $sourcePath = database_path('seeders/dummy_images/posts');
        $destinationPath = 'posts';
        Storage::disk('public')->makeDirectory($destinationPath);

        // 3. Data spesifik untuk 11 post
        $posts = [
            ['judul' => 'Pengumuman Penting: Jadwal Kajian Bulanan', 'kategori' => 'Pengumuman'],
            ['judul' => 'Berita Kolaborasi dengan Universitas Lokal', 'kategori' => 'Berita'],
            ['judul' => 'Pengumuman: Program Beasiswa Santri Berprestasi', 'kategori' => 'Pengumuman'],
            ['judul' => 'Berita: Peluncuran Produk UMKM Halal Baru', 'kategori' => 'Berita'],
            ['judul' => 'Pengumuman Rapat Anggota Tahunan', 'kategori' => 'Pengumuman'],
            ['judul' => 'Berita Seputar Pengembangan Wisata Religi', 'kategori' => 'Berita'],
            ['judul' => 'Pengumuman Libur Hari Raya', 'kategori' => 'Pengumuman'],
            ['judul' => 'Berita: Workshop Digital Marketing untuk UMKM', 'kategori' => 'Berita'],
            ['judul' => 'Pengumuman Pendaftaran Relawan Baru', 'kategori' => 'Pengumuman'],
            ['judul' => 'Berita Kunjungan dari Tokoh Masyarakat', 'kategori' => 'Berita'],
            ['judul' => 'Pengumuman Hasil Lomba Esai Islami', 'kategori' => 'Pengumuman'],
        ];

        // 4. Proses penyalinan file dan pembuatan data
        foreach ($posts as $index => $postData) {
            $sourceFile = $sourcePath . '/seeder.png';

            // Membuat nama file tujuan yang unik agar tidak saling menimpa
            $uniqueName = 'seeder-' . ($index + 1) . '-' . uniqid() . '.png';
            $destinationFile = $destinationPath . '/' . $uniqueName;

            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            // Buat record di database
            Post::create([
                'judul' => $postData['judul'],
                'isi' => 'Ini adalah isi konten atau deskripsi default untuk post ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'kategori' => $postData['kategori'],
                'foto' => $destinationFile
            ]);
        }
    }
}
