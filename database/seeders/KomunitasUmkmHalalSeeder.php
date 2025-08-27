<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KomunitasUmkmHalal;

class KomunitasUmkmHalalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Kosongkan tabel
        KomunitasUmkmHalal::truncate();

        KomunitasUmkmHalal::create([
            'whatsapp_link' => 'https://chat.whatsapp.com/E65d0Drx0LE9cmaqxNadbK'
        ]);

        $this->command->info('Seeding link Komunitas UMKM Halal selesai.');
    }
}
