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
        Post::query()->delete();
        Storage::disk('public')->deleteDirectory('posts');

        $sourcePath = database_path('seeders/dummy_images/posts');
        $destinationPath = 'posts';
        Storage::disk('public')->makeDirectory($destinationPath);

        $posts = [
            [
                'judul' => 'Pembukaan Program Sertifikasi Halal Gratis untuk UMKM',
                'isi' => 'Dalam rangka mendukung ekosistem halal, kami membuka program sertifikasi halal gratis bagi 100 UMKM terpilih. Program ini bertujuan untuk meningkatkan daya saing produk lokal di pasar nasional dan global. Pendaftaran dibuka mulai hari ini hingga akhir bulan.',
                'kategori' => 'Pengumuman',
                'foto_sumber' => 'pengumuman1.jpg'
            ],
            [
                'judul' => 'Kajian Fiqih Muamalah Kontemporer Bersama Ustadz Ahli',
                'isi' => 'Saksikan kajian rutin bulanan yang akan membahas seluk-beluk fiqih muamalah di era digital. Tema bulan ini adalah "Hukum Jual Beli Online dan Dropshipping". Acara akan diselenggarakan secara hybrid, online dan offline di aula utama.',
                'kategori' => 'Berita',
                'foto_sumber' => 'berita1.jpg'
            ],
            [
                'judul' => 'Kolaborasi Baru dengan Lembaga Keuangan Syariah untuk Permodalan UMKM',
                'isi' => 'Wisata Halal Jabal Nur menjalin kerjasama strategis dengan beberapa Bank Syariah untuk memfasilitasi akses permodalan bagi UMKM binaan. Inisiatif ini diharapkan dapat mendorong pertumbuhan usaha dan menciptakan kemandirian ekonomi umat.',
                'kategori' => 'Berita',
                'foto_sumber' => 'berita2.jpg'
            ],
        ];

        foreach ($posts as $postData) {
            $sourceFile = $sourcePath . '/' . $postData['foto_sumber'];
            $destinationFile = $destinationPath . '/' . $postData['foto_sumber'];

            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            Post::create([
                'judul' => $postData['judul'],
                'isi' => $postData['isi'],
                'kategori' => $postData['kategori'],
                'foto' => $destinationFile
            ]);
        }
    }
}
