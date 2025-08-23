<?php
namespace Database\Seeders;
use App\Models\StrukturOrganisasi;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    public function run(): void
    {
        StrukturOrganisasi::query()->delete();
        StrukturOrganisasi::create([
            'dewan_pembina' => "Ketua: KH. M. Nasyih Syarifuddin\nWakil Ketua: KH. Basyar Rohman, SHI, MSi\nAnggota:\n- KH. Ahmad Yusro Mubarok\n- Drs. H. Cahyanto, MM\n- Izzuddin Latif, SH, MH\n- Alfebian Yulando, ST, MA",
            'dewan_pakar' => "Ketua: Prof. Dr. H. Abdul Ghofur, MAg\nWakil Ketua: Dr. Nur Fatoni, MAg\nAnggota:\n- Dr. Ali Murtadho, MAg\n- Dr. KH Ahmad Tantowi, MSi, MPd\n- Ubaidul Musthofa, SHI, MSi",
            'badan_pengurus_harian' => "Ketua Umum: M. Irkham Fukhuludin, SEI. CWC.\nSekretaris Umum: M. Fatchurrohman, SHI, ME.\nSekretaris I: Muhammad Azmi Syafiq, SH, MH.\nSekretaris II: Bayu Anggoro Husodo, SPd\nBendahara Umum: Iqbal Sarayulus Nuh, SM\nBendahara I: Ririn Inamatussolihah.\nBendahara II: Mayya Shofa Mahfud, MPd.",
            'bidang_bidang' => "1. Bidang ZISWAF\nKetua: Charlie Ibrahim Noech, SE.\nAnggota:\n- Zuniar Dewi Karisa\n- M. Aslam Izzulhaq\n\n2. Bidang Penelitian dan Pengembangan Ekonomi Syariah\nKetua: Anathul Mualifah, SE.\nAnggota:\n- Zahrina Maulida\n- Najib Nurul Anam",
        ]);
    }
}
