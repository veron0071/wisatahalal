<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            //  New Seeders
            VisiMisiSeeder::class,
            ProfilLembagaSeeder::class,
            PotensiKerjasamaSeeder::class,
            StrukturOrganisasiSeeder::class,
            RoadmapSeeder::class,
            ProgramKerjaSeeder::class,

            // Old Seeders
            // PostSeeder::class,
            // UlamaSeeder::class,
            // FasilitasSeeder::class,
            // UmkmSeeder::class,
            // CeramahSeeder::class,
            // ZiarahSeeder::class,
            // VideoSeeder::class,
            // PaketWisataSeeder::class,
            // SertifikasiSeeder::class,
            // ManuskripSeeder::class,
            // StakeholderSeeder::class,
        ]);
    }
}
