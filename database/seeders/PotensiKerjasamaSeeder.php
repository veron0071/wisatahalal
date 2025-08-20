<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PotensiKerjasama;

class PotensiKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat jika seeder dijalankan lagi
        PotensiKerjasama::query()->delete();

        $data = [
            [
                'kategori_mitra' => 'Pemerintah Daerah/OPD',
                'mitra_potensial' => 'Pemkab Kendal, Bappeda, Dinkop-UKM, Disperindag, Dinas Pariwisata, Dinas Pertanian/Perikanan, Dinas Pendidikan, Diskominfo',
                'isu_need_utama' => 'Peningkatan kinerja ekonomi syariah, sertifikasi halal, pemberdayaan UMKM, pariwisata halal, data & harmonisasi program',
                'nilai_tambah_pd_mes' => 'Desain program, jejaring LKS syariah, kurasi pelaku, pendampingan halal'
            ],
            [
                'kategori_mitra' => 'BUMD/BUMN & Perusahaan',
                'mitra_potensial' => 'Perusda, Kawasan industri, perusahaan pangan/tekstil/logistik, CSR, Bursa Efek Indonesia',
                'isu_need_utama' => 'Pemberdayaan masyarakat, pemasok bersertifikat halal, keberlanjutan (ESG)',
                'nilai_tambah_pd_mes' => 'Desain program CSR ZISWAF produktif, kurasi pemasok halal'
            ],
            [
                'kategori_mitra' => 'Otoritas & Badan Nasional',
                'mitra_potensial' => 'OJK, Bank Indonesia (BI), Komite Nasional Ekonomi dan Keuangan Syariah (KNEKS), Badan Penyelenggara Jaminan Produk Halal (BPJPH), Badan Standardisasi Nasional (BSN), Badan POM, Badan Wakaf Indonesia (BWI)',
                'isu_need_utama' => 'Regulasi & pengawasan, akselerasi industri keuangan syariah, sertifikasi halal nasional, standar mutu, pengembangan wakaf',
                'nilai_tambah_pd_mes' => 'Sinkronisasi kebijakan pusat-daerah, fasilitasi akses program nasional, sertifikasi & standardisasi, pendampingan kelembagaan'
            ],
            [
                'kategori_mitra' => 'Lembaga Keuangan Syariah',
                'mitra_potensial' => 'Bank syariah (UUS/BUS), BPRS, KSPPS/BMT, asuransi syariah/takaful, pegadaian syariah, sekuritas syariah',
                'isu_need_utama' => 'Sosialisasi dan Workshop dalam literasi dan inklusifitas keuangan syariah, Penyaluran pembiayaan berkualitas',
                'nilai_tambah_pd_mes' => 'Klaster UMKM terkurasi, skema pembiayaan syariah sesuai sektor'
            ],
            [
                'kategori_mitra' => 'ZISWAF & Filantropi',
                'mitra_potensial' => 'BAZNAS, LAZ, BWI/Nazhir, filantropi perusahaan',
                'isu_need_utama' => 'Penyaluran efektif & berdampak, graduation mustahik',
                'nilai_tambah_pd_mes' => 'Desain blended finance ZISWAF-komersial'
            ],
            [
                'kategori_mitra' => 'Pendidikan, Riset & SDM',
                'mitra_potensial' => 'Kampus, SMK, pesantren, BLK, Inkubator bisnis',
                'isu_need_utama' => 'Kurikulum vokasi, magang industri, riset kebijakan/produk halal',
                'nilai_tambah_pd_mes' => 'Penyelarasan kurikulum, jejaring industri/LPH'
            ],
            [
                'kategori_mitra' => 'Komunitas & Ormas',
                'mitra_potensial' => 'Kadin/Apindo, HIPMI, Dekranasda, komunitas wirausaha, ormas Keagamaan',
                'isu_need_utama' => 'Perluasan Ekosistem Halal, Literasi Bisnis Syariah',
                'nilai_tambah_pd_mes' => 'Konsolidasi demand, pelatihan tematik'
            ],
            [
                'kategori_mitra' => 'Teknologi & Platform',
                'mitra_potensial' => 'Fintech syariah (berizin), marketplace, payment gateway, logistik',
                'isu_need_utama' => 'Digitalisasi, akses modal, pemasaran',
                'nilai_tambah_pd_mes' => 'Onboarding digital, integrasi pembayaran'
            ],
            [
                'kategori_mitra' => 'Lembaga Standar & Kepatuhan Syariah',
                'mitra_potensial' => 'BPJPH, LPH/LP3H, Dinas Kesehatan, BBPOM, BSN',
                'isu_need_utama' => 'Kepatuhan halal, mutu, keamanan pangan/obat/kosmetik',
                'nilai_tambah_pd_mes' => 'Orkestrasi proses sertifikasi, audit readiness'
            ]
        ];

        // Looping untuk memasukkan setiap baris data ke dalam tabel
        foreach ($data as $item) {
            PotensiKerjasama::create($item);
        }
    }
}
