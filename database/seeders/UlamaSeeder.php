<?php

namespace Database\Seeders;

use App\Models\Ulama;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UlamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data dan file lama
        Ulama::query()->delete();
        Storage::disk('public')->deleteDirectory('ulama');

        // 2. Tentukan path
        $sourcePath = database_path('seeders/dummy_images/ulama');
        $destinationPath = 'ulama';
        Storage::disk('public')->makeDirectory($destinationPath);

        // 3. Data nama untuk 11 ulama
        $ulamas = [
            ['nama' => 'KH. Ahmad Basyir'],
            ['nama' => 'Nyai Hj. Siti Fatimah'],
            ['nama' => 'Gus Abdullah Faqih'],
            ['nama' => 'KH. Muhammadun'],
            ['nama' => 'Prof. Dr. H. Abdul Ghofur'],
            ['nama' => 'Dr. Nur Fatoni, MAg'],
            ['nama' => 'KH. M. Nasyih Syarifuddin'],
            ['nama' => 'Dr. KH Ahmad Tantowi, MSi'],
            ['nama' => 'KH. Basyar Rohman, SHI, MSi'],
            ['nama' => 'Ubaidul Musthofa, SHI, MSi'],
            ['nama' => 'KH. Ahmad Yusro Mubarok'],
        ];

        // 4. Proses penyalinan file dan pembuatan data
        foreach ($ulamas as $index => $ulamaData) {
            $sourceFile = $sourcePath . '/seeder.png';

            // Membuat nama file tujuan yang unik
            $uniqueName = 'seeder-' . ($index + 1) . '-' . uniqid() . '.png';
            $destinationFile = $destinationPath . '/' . $uniqueName;

            // Salin file sumber ke public storage jika ada
            if (File::exists($sourceFile)) {
                File::copy($sourceFile, storage_path('app/public/' . $destinationFile));
            }

            // Buat record di database
            Ulama::create([
                'nama' => $ulamaData['nama'],
                'sejarah' => 'Ini adalah deskripsi atau sejarah singkat mengenai tokoh ulama ini. Informasi lebih lanjut akan ditambahkan kemudian oleh admin.',
                'foto' => $destinationFile
            ]);
        }
    }
}
