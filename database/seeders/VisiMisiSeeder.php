<?php
namespace Database\Seeders;
use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    public function run(): void
    {
        VisiMisi::query()->delete();
        VisiMisi::create([
            'visi' => 'Ekonomi dan Keuangan Syariah yang Berkontribusi Signifikan dalam Ekosistem Perekonomian Nasional.',
            'misi' => "Mendukung Indonesia menjadi Pusat Ekonomi dan Keuangan Syariah Dunia.\nMemperkuat Kontribusi Ekonomi dan Keuangan Syariah dalam Perekonomian Nasional.\nMendorong Implementasi Sistem Ekonomi dan Keuangan Syariah yang Menyeluruh.",
        ]);
    }
}
