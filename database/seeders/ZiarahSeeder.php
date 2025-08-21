<?php

namespace Database\Seeders;

use App\Models\Ziarah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ZiarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data lama
        Ziarah::query()->delete();

        // 2. Data untuk 11 lokasi ziarah
        $ziarahs = [
            [
                'nama_lokasi' => 'Makam Sunan Katong',
                'deskripsi' => 'Makam salah satu tokoh penyebar agama Islam di Kaliwungu, Kendal. Lokasi ini ramai dikunjungi peziarah terutama pada malam Jumat Kliwon.',
                'google_maps_link' => 'http://googleusercontent.com/maps.google.com/9'
            ],
            [
                'nama_lokasi' => 'Makam Wali Gembyang',
                'deskripsi' => 'Terletak di pusat kota Kendal, makam ini merupakan salah satu situs ziarah tertua dan paling dihormati di wilayah tersebut.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed0'
            ],
            [
                'nama_lokasi' => 'Makam Pangeran Benowo',
                'deskripsi' => 'Putra dari Sultan Hadiwijaya (Jaka Tingkir), makamnya terletak di Weleri dan menjadi salah satu destinasi penting bagi para peziarah sejarah Mataram Islam.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed1'
            ],
            [
                'nama_lokasi' => 'Petilasan Kyai Asyari (Wali Cempoko)',
                'deskripsi' => 'Sebuah situs bersejarah di Weleri yang diyakini sebagai tempat peristirahatan dan dakwah Kyai Asyari.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed2'
            ],
            [
                'nama_lokasi' => 'Makam Kyai Mandurorejo',
                'deskripsi' => 'Tokoh bersejarah yang makamnya berada di Kecamatan Patebon, sering dikunjungi oleh masyarakat lokal.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed3'
            ],
            [
                'nama_lokasi' => 'Makam Sunan Kalijaga, Demak',
                'deskripsi' => 'Salah satu anggota Wali Songo yang paling terkenal, makamnya di Kadilangu, Demak, menjadi pusat ziarah nasional.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed4'
            ],
            [
                'nama_lokasi' => 'Makam Sunan Muria, Kudus',
                'deskripsi' => 'Terletak di puncak Gunung Muria, makam ini menawarkan pengalaman ziarah spiritual sekaligus keindahan alam.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed5'
            ],
            [
                'nama_lokasi' => 'Makam Sunan Kudus',
                'deskripsi' => 'Berada di kompleks Masjid Menara Kudus yang ikonik, menjadi simbol akulturasi budaya yang kuat.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed6'
            ],
            [
                'nama_lokasi' => 'Makam Syech Jangkung (Saridin)',
                'deskripsi' => 'Tokoh legendaris dari Pati yang dikenal dengan karomahnya. Makamnya menjadi salah satu tujuan ziarah utama di wilayah Pantura timur.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed7'
            ],
            [
                'nama_lokasi' => 'Makam Mbah Kholil Bangkalan, Madura',
                'deskripsi' => 'Guru dari banyak ulama besar Nusantara, makamnya di Bangkalan, Madura, tidak pernah sepi dari peziarah.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed8'
            ],
            [
                'nama_lokasi' => 'Makam Gus Dur, Jombang',
                'deskripsi' => 'Makam Presiden ke-4 RI, K.H. Abdurrahman Wahid, di kompleks Pondok Pesantren Tebuireng, Jombang.',
                'google_maps_link' => 'https://maps.google.com/maps?q=LAT,LONG&t=&z=15&ie=UTF8&iwloc=&output=embed9'
            ],
        ];

        // 3. Proses pembuatan data
        foreach ($ziarahs as $ziarahData) {
            Ziarah::create($ziarahData);
        }
    }
}
