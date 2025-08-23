<?php
namespace Database\Seeders;
use App\Models\Roadmap;
use Illuminate\Database\Seeder;

class RoadmapSeeder extends Seeder
{
    public function run(): void
    {
        Roadmap::query()->delete();
        Roadmap::create([
            'gambar_roadmap' => null,
            'tahap1_tahun' => '2021 - 2023',
            'tahap1_deskripsi' => 'Mendukung Indonesia menjadi pusat ekonomi dan keuangan syariah dunia.',
            'tahap2_tahun' => '2024 - 2027',
            'tahap2_deskripsi' => 'Memperkuat kontribusi ekonomi dan keuangan syariah dalam perekonomian nasional.',
            'tahap3_tahun' => '2028 - 2030',
            'tahap3_deskripsi' => 'Mendorong implementasi sistem ekonomi dan keuangan syariah yang menyeluruh.',
        ]);
    }
}
