<?php

namespace Database\Seeders;

use App\Models\ProfilLembaga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilLembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfilLembaga::query()->delete();

        ProfilLembaga::create([
            'pendahuluan' => "Perkumpulan Masyarakat Ekonomi Syariah atau dikenal Masyarakat Ekonomi Syariah (MES) merupakan organisasi nirlaba yang bertujuan mengembangkan dan membumikan ekonomi syariah sebagai sistem ekonomi yang berkeadilan dan berdasarkan prinsip-prinsip syariah. Sifat MES adalah menjadi wadah yang diakui sebagai acuan dan diikuti sebagai teladan bagi usaha percepatan pengembangan dan penerapan sistem ekonomi dan etika bisnis syariah di Indonesia, mandiri, bukan organisasi pemerintah, serta bukan organisasi politik dan bukan merupakan bagian darinya. MES didirikan pada 1 Muharram 1422 H, bertepatan 26 Maret 2001, dan dideklarasikan esok harinya di Jakarta. Hingga kini, MES menjadi wadah yang inklusif menghimpun seluruh sumber daya yang ada dan membangun sinergi antar pemangku kepentingan dalam rangka membangun dan mengembangkan ekonomi syariah.\n\nAdapun PD (Pengurus Daerah) MES Kendal dilantik pada hari Sabtu, 13 November 2021, bertempat di Pendopo Tumenggung Bahurekso, Kendal. Pelantikan dilakukan oleh Ketua I Pengurus Wilayah MES Jawa Tengah, yaitu Nyata Nugraha. PD MES Kendal berkomitmen menjalankan peran sebagai katalisator perubahan melalui program-program berbasis pemberdayaan, literasi, dan kolaborasi multisektor. Dengan memadukan pendekatan keilmuan, praktik bisnis syariah, dan sinergi dengan pemerintah, akademisi, lembaga keuangan, serta komunitas, kami berupaya menciptakan dampak nyata bagi peningkatan kesejahteraan masyarakat.",

            'tujuan_manfaat' => "Menjelaskan identitas, visi-misi, dan struktur kepengurusan PD MES Kendal kepada publik.\nMenyajikan rangkaian program unggulan dan kegiatan prioritas secara jelas dan terstruktur.\nMenjadi alat promosi dan informasi resmi untuk berinteraksi dengan pemangku kepentingan.\nMemudahkan kerjasama dengan instansi pemerintah, lembaga keuangan, dunia usaha, dan komunitas.\nMenjadi bukti transparansi dan pertanggungjawaban organisasi kepada anggota dan masyarakat.\nMembantu penggalangan dana dan sponsor dengan menunjukkan program dan dampak yang akan dicapai.\nMemberikan arahan kerja yang jelas bagi pengurus dan relawan dalam melaksanakan program.\nMencatat perkembangan organisasi sebagai arsip dan referensi untuk periode berikutnya.",

            'target' => "Memperkenalkan visi, misi, dan program kerja MES Kendal kepada seluruh lapisan masyarakat.\nMenunjukkan legalitas dan struktur organisasi yang profesional.\nMenjalin kerjasama strategis dengan instansi pemerintah dan swasta.\nMeningkatkan awareness masyarakat tentang MES Kendal di berbagai kalangan.\nMerealisasikan seluruh program kerja yang telah direncanakan dengan adanya sinergi dan kolaborasi.",

            'legal_formal' => "Perkumpulan Masyarakat Ekonomi Syariah merupakan organisasi yang telah memiliki legitimasi melalui aspek legal formal sebagai berikut:\n\nAkta Pendirian: Akta Notaris Rini Martini Dahliani, SH. Nomor 03 Tanggal 22 Februari 2010 dan Nomor 02 Tanggal 16 April 2010 (perubahan) serta tertuang dalam Surat Keputusan Menteri Hukum dan Hak Asasi Manusia Nomor AHU-70.AH.01.06 Tanggal 22 Mei 2010 dan Lembar Berita Negara Nomor 47 Tanggal 14 Juni 2011.\n\nPerubahan Akta (terakhir): Akta Notaris Mohamad Fajri Mekka Putra, S.H, M.Kn. Nomor 10,- tentang Pernyataan Keputusan Rapat Musuawarah Nasional V Masyarakat Ekonomi Syariah tanggal 01 Februari 2021, serta terutang dalam Surat Keputusan Menteri Hukum dan Hak Asasi Manusia Nomor AHU-0000885.AH.01.08. TAHUN 2021 tentang Persetujuan Perubahan Perkumpulan Masyarakat Ekonomi Syariah tanggal 15 Juni 2021.\n\nPengurus Daerah Masyarakat Ekonomi Syariah Kabupaten Kendal: Telah Terdaftar di Badan Kesatuan Bangsa dan Politik Kabupaten Kendal sejak tahun 2023 Sebagai Organisasi Masyarakat Resmi di wilayah Kabupaten Kendal Berdasarkan Nomor Surat 200.1.4.4/0757/2025 Tentang Tanggapan atas Laporan Keberadaan Kemasyarakatan (Ormas) Tanggal 23 Juli 2025.",
        ]);
    }
}
