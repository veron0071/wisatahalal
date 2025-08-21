<?php

namespace Database\Seeders;

use App\Models\Stakeholder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StakeholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Stakeholder::query()->delete();

        // 2. Data untuk 11 stakeholder
        $stakeholders = [
            [
                'nama' => 'Pemerintah Kabupaten Kendal',
                'jenis' => 'Pemerintah',
                'peran' => 'Regulator utama dan partner strategis dalam pengembangan program daerah.'
            ],
            [
                'nama' => 'Dinas Koperasi & UKM',
                'jenis' => 'Pemerintah',
                'peran' => 'Pembinaan dan pemberdayaan UMKM lokal, fasilitasi perizinan.'
            ],
            [
                'nama' => 'Kamar Dagang dan Industri (KADIN) Kendal',
                'jenis' => 'Komunitas',
                'peran' => 'Mewadahi para pengusaha, menjadi jembatan antara bisnis dan pemerintah.'
            ],
            [
                'nama' => 'Forum Pondok Pesantren Kendal',
                'jenis' => 'Pesantren',
                'peran' => 'Koordinasi antar pesantren, pengembangan kurikulum ekonomi syariah.'
            ],
            [
                'nama' => 'Paguyuban UMKM Kuliner Kendal',
                'jenis' => 'UMKM',
                'peran' => 'Wadah bagi pelaku usaha kuliner untuk berbagi informasi dan promosi bersama.'
            ],
            [
                'nama' => 'Universitas Wahid Hasyim (UNWAHAS)',
                'jenis' => 'Akademisi',
                'peran' => 'Partner riset, kajian akademis, dan pengabdian masyarakat terkait ekonomi syariah.'
            ],
            [
                'nama' => 'Bank Syariah Indonesia (BSI) Cabang Kendal',
                'jenis' => 'Lembaga Keuangan',
                'peran' => 'Menyediakan akses permodalan dan layanan keuangan berbasis syariah.'
            ],
            [
                'nama' => 'Badan Penyelenggara Jaminan Produk Halal (BPJPH)',
                'jenis' => 'Otoritas Nasional',
                'peran' => 'Lembaga resmi yang mengeluarkan sertifikasi halal di Indonesia.'
            ],
            [
                'nama' => 'Komunitas Penggiat Wisata Kendal',
                'jenis' => 'Komunitas',
                'peran' => 'Promosi destinasi wisata lokal dan pembuatan paket-paket wisata inovatif.'
            ],
            [
                'nama' => 'Himpunan Pengusaha Muda Indonesia (HIPMI) Kendal',
                'jenis' => 'Komunitas',
                'peran' => 'Mendorong kewirausahaan di kalangan anak muda dan akselerasi bisnis.'
            ],
            [
                'nama' => 'Badan Amil Zakat Nasional (BAZNAS) Kendal',
                'jenis' => 'ZISWAF & Filantropi',
                'peran' => 'Pengelolaan dan penyaluran dana ZISWAF untuk program-program produktif.'
            ],
        ];

        // 3. Proses pembuatan data
        foreach ($stakeholders as $stakeholderData) {
            Stakeholder::create($stakeholderData);
        }
    }
}
