<?php

namespace Database\Seeders;

use App\Models\PaketWisata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        PaketWisata::query()->delete();

        // 2. Data untuk 11 paket wisata
        $paketWisatas = [
            [
                'nama' => 'Paket Ziarah Wali Kendal (1 Hari)',
                'harga' => 250000,
                'fasilitas' => 'Transportasi AC, Makan Siang, Pemandu Lokal, Air Mineral',
                'deskripsi' => 'Perjalanan spiritual sehari penuh mengunjungi makam-makam auliya terkemuka di wilayah Kendal.'
            ],
            [
                'nama' => 'Paket Jelajah UMKM Halal',
                'harga' => 150000,
                'fasilitas' => 'Transportasi, Pemandu, Voucher Belanja, Snack Halal',
                'deskripsi' => 'Mengunjungi dan mendukung langsung UMKM unggulan di sekitar Jabal Nur, mencicipi produk dan melihat proses pembuatan.'
            ],
            [
                'nama' => 'Paket Edukasi Pesantren & Manuskrip',
                'harga' => 300000,
                'fasilitas' => 'Kunjungan Pesantren, Workshop Manuskrip, Makan Siang, Sertifikat',
                'deskripsi' => 'Paket edukatif untuk pelajar dan akademisi yang ingin mendalami sejarah keilmuan Islam melalui pondok pesantren dan arsip manuskrip.'
            ],
            [
                'nama' => 'Paket Keluarga Ceria',
                'harga' => 500000,
                'fasilitas' => 'Transportasi, Tiket Masuk Taman Religi, Makan untuk 4 orang',
                'deskripsi' => 'Paket rekreasi keluarga yang menggabungkan unsur wisata religi dan hiburan yang ramah anak.'
            ],
            [
                'nama' => 'Paket Ziarah Pantura (2 Hari 1 Malam)',
                'harga' => 750000,
                'fasilitas' => 'Transportasi AC, Penginapan Syariah, Makan 3x, Pemandu',
                'deskripsi' => 'Menyusuri jejak para wali di sepanjang jalur Pantura, dari Kendal hingga Demak dan Kudus.'
            ],
            [
                'nama' => 'Paket Korporat & Instansi',
                'harga' => 400000,
                'fasilitas' => 'Transportasi, Aula Pertemuan, Coffee Break, Makan Siang, Pemandu',
                'deskripsi' => 'Dirancang untuk kegiatan gathering atau outing perusahaan dengan sentuhan nilai-nilai spiritual.'
            ],
            [
                'nama' => 'Paket Backpacker Ziarah',
                'harga' => 125000,
                'fasilitas' => 'Peta Ziarah Digital, Rekomendasi Akomodasi Murah',
                'deskripsi' => 'Untuk peziarah solo atau grup kecil dengan budget terbatas yang ingin menjelajahi lokasi-lokasi ziarah secara mandiri.'
            ],
            [
                'nama' => 'Paket Kuliner Halal',
                'harga' => 200000,
                'fasilitas' => 'Transportasi, Pemandu Kuliner, Voucher Makan di 3 tempat',
                'deskripsi' => 'Petualangan rasa mencicipi berbagai kuliner halal legendaris dan modern di Kendal.'
            ],
            [
                'nama' => 'Paket Workshop Sertifikasi Halal',
                'harga' => 350000,
                'fasilitas' => 'Materi Workshop, Konsultasi, Sertifikat Pelatihan, Snack & Makan Siang',
                'deskripsi' => 'Paket khusus untuk para pelaku UMKM yang ingin memahami dan memulai proses sertifikasi halal untuk produknya.'
            ],
            [
                'nama' => 'Paket Itikaf & Kajian Ramadhan',
                'harga' => 600000,
                'fasilitas' => 'Akomodasi di Pesantren, Sahur & Buka Puasa, Kelas Kajian Intensif',
                'deskripsi' => 'Paket khusus selama bulan Ramadhan untuk merasakan pengalaman spiritual mendalam dengan beritikaf dan mengikuti kajian.'
            ],
            [
                'nama' => 'Paket Fotografi Sejarah Islam',
                'harga' => 180000,
                'fasilitas' => 'Pemandu Sejarah, Izin Lokasi, Air Mineral',
                'deskripsi' => 'Bagi para pegiat fotografi yang ingin mengabadikan keindahan arsitektur dan momen spiritual di lokasi-lokasi bersejarah.'
            ],
        ];

        // 3. Proses pembuatan data
        foreach ($paketWisatas as $paket) {
            PaketWisata::create($paket);
        }
    }
}
