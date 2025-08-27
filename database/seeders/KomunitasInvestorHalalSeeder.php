<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KomunitasInvestorHalal;

class KomunitasInvestorHalalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KomunitasInvestorHalal::truncate();

        KomunitasInvestorHalal::create([
            'whatsapp_link' => 'https://chat.whatsapp.com/IQRRXIidWKlL6a94yjOqv9'
        ]);

        $this->command->info('Seeding link Komunitas Investor Halal selesai.');
    }
}
