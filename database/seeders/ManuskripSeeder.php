<?php

namespace Database\Seeders;

use App\Models\Manuskrip;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManuskripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Manuskrip::query()->delete();

        // 2. Data untuk 11 manuskrip
        $manuskrips = [
            ['judul' => 'Kitab Fath al-Qarib'],
            ['judul' => 'Manuskrip Sejarah Walisongo'],
            ['judul' => 'Tafsir Jalalain - Salinan Abad ke-18'],
            ['judul' => 'Kitab Al-Hikam oleh Ibnu Athaillah As-Sakandari'],
            ['judul' => 'Naskah Kuno Babad Tanah Jawi'],
            ['judul' => 'Syair Perahu oleh Hamzah Fansuri'],
            ['judul' => 'Kitab Adab al-Alim wa al-Muta\'allim'],
            ['judul' => 'Manuskrip Pengobatan Tradisional Jawa'],
            ['judul' => 'Catatan Perjalanan Haji Tahun 1920'],
            ['judul' => 'Kitab Primbon Jawa Kuno'],
            ['judul' => 'Silsilah Para Kiai Pendiri Pesantren di Kendal'],
        ];

        // 3. Proses pembuatan data
        foreach ($manuskrips as $manuskripData) {
            Manuskrip::create([
                'judul' => $manuskripData['judul'],
                'deskripsi' => 'Deskripsi default untuk arsip manuskrip. Detail lebih lanjut mengenai asal-usul, kondisi, dan isi manuskrip akan ditambahkan oleh admin.',
                'file_url' => '', // Dikosongkan sesuai permintaan
            ]);
        }
    }
}
