<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndustriKeuanganSyariah;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class IndustriKeuanganSyariahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'foto' => '1.MultifinanceSyariah.jpg',
                'judul' => 'Multifinance Syariah',
            ],
            [
                'foto' => '2.WorkshopLiterasiKeuanganSyariah.JPG',
                'judul' => 'Workshop Literasi Keuangan Syariah',
            ],
            [
                'foto' => '3.FLWFChapterKendalNew.JPG',
                'judul' => 'FLWF Chapter Kendal New',
            ],
            [
                'foto' => '4.NgopiInvestorHalalKendalnew.JPG',
                'judul' => 'Ngopi Investor Halal Kendal new',
            ],
            [
                'foto' => '5.WPMSChapterKendal.JPG',
                'judul' => 'WPMS Chapter Kendal',
            ],
            [
                'foto' => '6.SemnasdanLaunchingGisPesantren.JPG',
                'judul' => 'Semnas dan Launching Gis Pesantren',
            ],
        ];

        $sumberPath = database_path('seeders/dummy_images/industri_keuangan_syariah');
        $tujuanFolder = 'industri_keuangan_syariah';

        IndustriKeuanganSyariah::truncate();
        Storage::disk('public')->deleteDirectory($tujuanFolder);
        Storage::disk('public')->makeDirectory($tujuanFolder);

        $this->command->info('Memulai proses seeding Industri Keuangan Syariah...');

        foreach ($items as $item) {
            $fileName = $item['foto'];
            $sumberFilePath = $sumberPath . '/' . $fileName;

            if (!File::exists($sumberFilePath)) {
                $this->command->warn("  -> File '{$fileName}' tidak ditemukan, item '{$item['judul']}' dilewati.");
                continue;
            }

            $tujuanPath = $tujuanFolder . '/' . $fileName;
            File::copy($sumberFilePath, storage_path('app/public/' . $tujuanPath));

            IndustriKeuanganSyariah::create([
                'foto' => $tujuanPath,
                'judul' => $item['judul'],
            ]);

            $this->command->line("  -> Berhasil seed: {$item['judul']}");
        }

        $this->command->info('Seeding Industri Keuangan Syariah selesai.');
    }
}
