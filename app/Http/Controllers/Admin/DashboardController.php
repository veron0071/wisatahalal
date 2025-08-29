<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// Impor semua model yang relevan dengan menu baru Anda
use App\Models\ProgramKerja;
use App\Models\Galeri;
use App\Models\Publikasi;
use App\Models\KawasanWisataHalal;
use App\Models\Opini;
use App\Models\PotensiKerjasama;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data dari setiap model
        $jumlahProgramKerja = ProgramKerja::count();
        $jumlahGaleri = Galeri::count();
        $jumlahPublikasi = Publikasi::count();
        $jumlahKawasan = KawasanWisataHalal::count();
        $jumlahOpini = Opini::count();
        $jumlahPotensiKerjasama = PotensiKerjasama::count();

        // Kirim semua data ke view
        return view('dashboard', compact(
            'jumlahProgramKerja',
            'jumlahGaleri',
            'jumlahPublikasi',
            'jumlahKawasan',
            'jumlahOpini',
            'jumlahPotensiKerjasama'
        ));
    }
}
