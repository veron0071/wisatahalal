<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import semua model yang dibutuhkan untuk dihitung
use App\Models\Post;
use App\Models\Ulama;
use App\Models\Fasilitas;
use App\Models\Umkm;
use App\Models\Ceramah;
use App\Models\Ziarah;
use App\Models\Video;
use App\Models\PaketWisata;
use App\Models\Sertifikasi;
use App\Models\Manuskrip;
use App\Models\Stakeholder;
use App\Models\PotensiKerjasama;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPosts = Post::count();
        $jumlahUlama = Ulama::count();
        $jumlahFasilitas = Fasilitas::count();
        $jumlahUmkm = Umkm::count();
        $jumlahCeramah = Ceramah::count();
        $jumlahZiarah = Ziarah::count();
        $jumlahVideo = Video::count();
        $jumlahPaketWisata = PaketWisata::count();
        $jumlahSertifikasi = Sertifikasi::count();
        $jumlahManuskrip = Manuskrip::count();
        $jumlahStakeholder = Stakeholder::count();
        $jumlahPotensiKerjasama = PotensiKerjasama::count();

        return view('dashboard', compact(
            'jumlahPosts',
            'jumlahUlama',
            'jumlahFasilitas',
            'jumlahUmkm',
            'jumlahCeramah',
            'jumlahZiarah',
            'jumlahVideo',
            'jumlahPaketWisata',
            'jumlahSertifikasi',
            'jumlahManuskrip',
            'jumlahStakeholder',
            'jumlahPotensiKerjasama'
        ));
    }
}
