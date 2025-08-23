<?php
namespace Database\Seeders;
use App\Models\ProgramKerja;
use Illuminate\Database\Seeder;

class ProgramKerjaSeeder extends Seeder
{
    public function run(): void
    {
        ProgramKerja::query()->delete();
        $data = [
            ['komite_bidang' => 'Pengurus Harian', 'program_kerja' => '1. Dua Bulanan PD MES Kendal', 'tujuan_program' => 'Adanya Program Bersama Dewan Pakar atau Dewan Pembina terkait pembahasan tema secara dan adanya rapat koordinasi incidental dengan mengidentifikasi program, timeline agenda, program roadshow pengurus MES Kendal'],
            ['komite_bidang' => 'Pengurus Harian', 'program_kerja' => '2. Inventarisasi dan kesekertariatan', 'tujuan_program' => 'Adanya tertib administrasi surat dan menginventariskan beberapa peralatan dan kelengkapan milik Pengurus Daerah MES Kendal.'],
            ['komite_bidang' => 'Pengurus Harian', 'program_kerja' => '3. Laporan Pemasukan dan Biaya Serta Evaluasi Dana Kegiatan', 'tujuan_program' => 'Adanya tertib laporan keuangan dan mengevaluasi beberapa dana yang di dapatkan dari lembaga dan (Sponsorship) untuk kegiatan Pengurus Daerah MES Kendal.'],
        ];
        foreach ($data as $item) {
            ProgramKerja::create($item);
        }
    }
}
