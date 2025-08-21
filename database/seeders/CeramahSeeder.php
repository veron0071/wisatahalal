<?php

namespace Database\Seeders;

use App\Models\Ceramah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CeramahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Ceramah::query()->delete();

        // 2. Data untuk 11 ceramah
        $ceramahs = [
            ['judul' => 'Tafsir Surat Al-Fatihah: Pintu Segala Ilmu', 'pemateri' => 'KH. Ahmad Basyir'],
            ['judul' => 'Peran Wanita dalam Sejarah Islam', 'pemateri' => 'Nyai Hj. Siti Fatimah'],
            ['judul' => 'Fiqih Milenial: Jual Beli Online', 'pemateri' => 'Gus Abdullah Faqih'],
            ['judul' => 'Meneladani Akhlak Rasulullah SAW', 'pemateri' => 'KH. Muhammadun'],
            ['judul' => 'Konsep Rezeki dalam Al-Qur\'an', 'pemateri' => 'Prof. Dr. H. Abdul Ghofur'],
            ['judul' => 'Dasar-dasar Ekonomi Syariah', 'pemateri' => 'Dr. Nur Fatoni, MAg'],
            ['judul' => 'Pentingnya Wakaf Produktif untuk Umat', 'pemateri' => 'KH. M. Nasyih Syarifuddin'],
            ['judul' => 'Sejarah Kodifikasi Hadits', 'pemateri' => 'Dr. KH Ahmad Tantowi, MSi'],
            ['judul' => 'Manajemen Qalbu: Menjaga Hati Tetap Bersih', 'pemateri' => 'KH. Basyar Rohman, SHI, MSi'],
            ['judul' => 'Zakat dan Pajak: Dua Kewajiban, Satu Tujuan', 'pemateri' => 'Ubaidul Musthofa, SHI, MSi'],
            ['judul' => 'Kisah Inspiratif Para Sahabat Nabi', 'pemateri' => 'KH. Ahmad Yusro Mubarok'],
        ];

        // 3. Proses pembuatan data
        foreach ($ceramahs as $ceramahData) {
            Ceramah::create([
                'judul' => $ceramahData['judul'],
                'pemateri' => $ceramahData['pemateri'],
                'deskripsi' => 'Ini adalah deskripsi default untuk ceramah atau kajian. Ringkasan atau isi lengkap dari materi akan ditambahkan kemudian oleh admin melalui form.',
                // Link video YouTube contoh yang berbeda untuk setiap data
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
            ]);
        }
    }
}
