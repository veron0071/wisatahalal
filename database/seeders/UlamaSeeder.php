<?php

namespace Database\Seeders;

use App\Models\Ulama;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UlamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ulama::query()->delete();
        Storage::disk('public')->deleteDirectory('ulama');

        $sourcePath = database_path('seeders/dummy_images/ulama');
        $destinationPath = 'ulama';

        Storage::disk('public')->makeDirectory($destinationPath);

        $ulamas = [
            [
                'nama' => 'KH. Ahmad Basyir',
                'sejarah' => 'Seorang ulama kharismatik pendiri Pondok Pesantren di Kendal. Beliau dikenal karena kedalaman ilmunya dalam bidang Fiqih dan Tasawuf. Banyak santrinya yang kini menjadi tokoh masyarakat.',
                'foto_sumber' => 'ulama1.jepg' // Nama file di folder sumber
            ],
            [
                'nama' => 'Nyai Hj. Siti Fatimah',
                'sejarah' => 'Tokoh ulama perempuan yang menjadi pelopor pendidikan bagi santriwati. Beliau fokus pada pengajaran Al-Qur\'an dan pemberdayaan perempuan di lingkungan pesantren.',
                'foto_sumber' => 'ulama2.jepg' // Nama file di folder sumber
            ],
            [
                'nama' => 'Gus Abdullah Faqih',
                'sejarah' => 'Ulama muda yang populer di kalangan milenial. Dakwahnya ringan, mudah diterima, dan sering menggunakan platform digital untuk menyebarkan ilmu agama Islam yang damai dan toleran.',
                'foto_sumber' => 'ulama3.jepg' // Nama file di folder sumber
            ],
        ];

        foreach ($ulamas as $ulamaData) {
            $sourceFile = $sourcePath . '/' . $ulamaData['foto_sumber'];
            $destinationFile = $destinationPath . '/' . $ulamaData['foto_sumber'];

            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            Ulama::create([
                'nama' => $ulamaData['nama'],
                'sejarah' => $ulamaData['sejarah'],
                'foto' => $destinationFile
            ]);
        }
    }
}
