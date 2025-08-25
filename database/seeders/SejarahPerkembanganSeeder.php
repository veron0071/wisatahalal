<?php
namespace Database\Seeders;
use App\Models\SejarahPerkembangan;
use Illuminate\Database\Seeder;

class SejarahPerkembanganSeeder extends Seeder
{
    public function run(): void
    {
        SejarahPerkembangan::query()->delete();
        SejarahPerkembangan::create([
            'paragraf_1' => "Sejarah Kawasan Jabal Nur di Desa Protomulyo, Kaliwungu Selatan, Kendal, tidak bisa dipisahkan dari perjalanan panjang dakwah Islam di pesisir utara Jawa. Kawasan ini dikenal sebagai salah satu titik penting penyebaran Islam di Jawa Tengah karena menjadi tempat bersemayamnya para ulama besar, terutama KH Asy’ari—dikenal luas sebagai Kiai Guru—yang pada abad ke-17 mendirikan Masjid Al-Muttaqin...",
            'paragraf_2' => "Titik penting dalam pengembangan kawasan ini terjadi pada tahun 2019 ketika Bupati Kendal meresmikan Gapura Wisata Religi Jabal Nur. Peresmian gapura ini menjadi simbol komitmen pemerintah untuk menjadikan Jabal Nur sebagai salah satu destinasi religi unggulan kabupaten...",
        ]);
    }
}
