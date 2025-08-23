<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    // Satu method ini akan menangani semua 8 halaman program kerja
    public function show($bidangSlug)
    {
        // Peta untuk mengubah slug URL menjadi nama bidang yang ada di database
        $mapBidang = [
            'pengurus-harian' => 'Pengurus Harian',
            'ziswaf-dan-csr' => 'Bidang Ziswaf dan CSR',
            'penelitian' => 'Bidang Penelitian dan Pengembangan Ekonomi Syariah',
            'bisnis-pariwisata' => 'Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif',
            'multimedia' => 'Bidang Multimedia dan Kominfo',
            'sinergi' => 'Bidang Sinergi Antar Lembaga dan Komunitas',
            'kaderisasi' => 'Bidang Kaderisasi',
            'pendidikan' => 'Bidang Pendidikan dan Pelatihan',
        ];

        // Ambil nama bidang yang benar, jika slug tidak ada, batalkan.
        $namaBidang = $mapBidang[$bidangSlug] ?? null;
        if (!$namaBidang) {
            abort(404);
        }

        // Ambil semua program kerja yang cocok dengan nama bidang tersebut
        $programs = ProgramKerja::where('komite_bidang', $namaBidang)->get();

        return view('program-kerja.show', [
            'namaBidang' => $namaBidang,
            'programs' => $programs,
        ]);
    }
}
