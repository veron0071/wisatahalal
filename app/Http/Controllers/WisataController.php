<?php

namespace App\Http\Controllers;

use App\Models\ProfilLembaga;
use App\Models\Ulama;
use App\Models\Fasilitas;
use App\Models\Umkm;
use App\Models\Ceramah;
use App\Models\Heritage;
use App\Models\Ziarah;
use App\Models\Manuskrip;
use App\Models\PaketWisata;
use App\Models\LokasiZiarah;
use App\Models\Pelatihan;
use App\Models\Sertifikasi;
use App\Models\Artikel;
use App\Models\Kajian;
use App\Models\Stakeholder;
use App\Models\Video;
use App\Models\Post;
use App\Models\KawasanWisataHalal;
use App\Models\SertifikasiHalalLink;
use App\Models\Galeri;
use App\Models\GisPesantren;
use Illuminate\Http\Request;

class WisataController extends Controller
{

    private const PAGINATION_COUNT = 9;

    // =================== POST  ===================
    public function beritaIndex()
    {
        // $featuredPost = \App\Models\Post::where('kategori', 'Berita')->latest()->first();

        // $posts = \App\Models\Post::where('kategori', 'Berita')
        //     ->when($featuredPost, function ($query) use ($featuredPost) {
        //         return $query->where('id', '!=', $featuredPost->id);
        //     })
        //     ->latest()
        //     ->take(5)
        //     ->get();

        // return view('posts.berita', compact('featuredPost', 'posts'));
        $posts = \App\Models\Post::where('kategori', 'Berita')->latest()->paginate(5);
        return view('posts.berita', compact('posts'));
    }
    public function loadMoreBerita(Request $request)
    {
        $posts = \App\Models\Post::where('kategori', 'Berita')
                ->latest()
                ->paginate(5, ['*'], 'page', $request->query('page'));

        return response()->json($posts);
    }

    public function pengumumanIndex()
    {
        $posts = \App\Models\Post::where('kategori', 'Pengumuman')->latest()->paginate(5);
        return view('posts.pengumuman', compact('posts'));
    }

    public function loadMorePengumuman(Request $request)
    {
        $posts = \App\Models\Post::where('kategori', 'Pengumuman')
                ->latest()
                ->paginate(5, ['*'], 'page', $request->query('page'));

        return response()->json($posts);
    }


    // =================== ULAMA ===================
    public function ulamaIndex()
    {
        // $ulamas = Ulama::latest()->paginate(self::PAGINATION_COUNT);
        // return view('ulama.index', compact('ulamas'));

        // $ulamas = \App\Models\Ulama::latest()->paginate(10);
        // return view('ulama.index', compact('ulamas'));

        // Perbaikan: Ambil data ulama unggulan
        // Buat tampilan interaktif mas hehe
        $featuredUlama = \App\Models\Ulama::latest()->first();

        $ulamas = \App\Models\Ulama::query()
            ->when($featuredUlama, function ($query) use ($featuredUlama) {
                // Pastikan data unggulan tidak muncul lagi di daftar bawah
                return $query->where('id', '!=', $featuredUlama->id);
            })
            ->latest()
            ->paginate(10);

        return view('ulama.index', compact('featuredUlama', 'ulamas'));
    }

    public function ulamaShow(Ulama $ulama)
    {
        return view('ulama.show', compact('ulama'));
    }

    // =================== FASILITAS ===================
    public function fasilitasIndex()
    {
        // Perbaikan: $fasilitas -> $fasilitass
        // $fasilitass = Fasilitas::latest()->paginate(self::PAGINATION_COUNT);
        // return view('fasilitas.index', compact('fasilitass'));

        $featuredFasilitas = \App\Models\Fasilitas::latest()->first();

        // Buat tampilan interaktif mas hehe
        $fasilitass = \App\Models\Fasilitas::query()
            ->when($featuredFasilitas, function ($query) use ($featuredFasilitas) {
                return $query->where('id', '!=', $featuredFasilitas->id);
            })
            ->latest()
            ->paginate(8);

        return view('fasilitas.index', compact('featuredFasilitas', 'fasilitass'));
    }

    public function fasilitasShow(Fasilitas $fasilitas)
    {
        return view('fasilitas.show', compact('fasilitas'));
    }

    // =================== UMKM ===================
    public function umkmIndex()
    {
        // $umkms = Umkm::latest()->paginate(self::PAGINATION_COUNT);
        // return view('umkm.index', compact('umkms'));

        $umkms = \App\Models\Umkm::latest()->paginate(9);

        return view('umkm.index', compact('umkms'));
    }

    public function umkmShow(Umkm $umkm)
    {
        return view('umkm.show', compact('umkm'));
    }

    // =================== CERAMAH ===================
    public function ceramahIndex()
    {
        $ceramahs = Ceramah::latest()->paginate(self::PAGINATION_COUNT);
        return view('ceramah.index', compact('ceramahs'));
    }

    public function ceramahShow(Ceramah $ceramah)
    {
        return view('ceramah.show', compact('ceramah'));
    }

    // =================== HERITAGE ===================
    public function heritageIndex()
    {
        $heritages = Heritage::latest()->paginate(self::PAGINATION_COUNT);
        return view('heritage.index', compact('heritages'));
    }

    public function heritageShow(Heritage $heritage)
    {
        return view('heritage.show', compact('heritage'));
    }

    // =================== ZIARAH ===================
    public function ziarahsIndex()
    {
        $ziarahs = Ziarah::latest()->paginate(self::PAGINATION_COUNT);
        return view('ziarahs.index', compact('ziarahs'));
    }

    // public function ziarahShow(Ziarah $ziarah)
    // {
    //     return view('ziarah.show', compact('ziarah'));
    // }

    // =================== MANUSKRIP ===================
    public function manuskripIndex()
    {
        $manuskrips = Manuskrip::latest()->paginate(self::PAGINATION_COUNT);
        return view('manuskrip.index', compact('manuskrips'));
    }

    public function manuskripShow(Manuskrip $manuskrip)
    {
        return view('manuskrip.show', compact('manuskrip'));
    }

    // =================== PAKET WISATA ===================
    public function paketWisataIndex()
    {
        $paketWisatas = PaketWisata::latest()->paginate(self::PAGINATION_COUNT);
        return view('paketwisata.index', compact('paketWisatas'));
    }

    public function paketWisataShow(PaketWisata $paketWisata)
    {
        return view('paketwisata.show', compact('paketWisata'));
    }

    // =================== LOKASI ZIARAH ===================
    public function lokasiZiarahIndex()
    {
        // Perbaikan: 'lokasiziayah' -> 'lokasiziarah'
        $lokasiZiarahs = LokasiZiarah::latest()->paginate(self::PAGINATION_COUNT);
        return view('lokasiziarah.index', compact('lokasiZiarahs'));
    }

    public function lokasiZiarahShow(LokasiZiarah $lokasiZiarah)
    {
        // Perbaikan: 'lokasiziayah' -> 'lokasiziarah'
        return view('lokasiziarah.show', compact('lokasiZiarah'));
    }

    // =================== PELATIHAN ===================
    public function pelatihanIndex()
    {
        $pelatihans = Pelatihan::latest()->paginate(self::PAGINATION_COUNT);
        return view('pelatihan.index', compact('pelatihans'));
    }

    public function pelatihanShow(Pelatihan $pelatihan)
    {
        return view('pelatihan.show', compact('pelatihan'));
    }

    // =================== SERTIFIKASI ===================
    public function sertifikasiIndex()
    {
        $sertifikasis = Sertifikasi::latest()->paginate(self::PAGINATION_COUNT);
        return view('sertifikasi.index', compact('sertifikasis'));
    }

    public function sertifikasiShow(Sertifikasi $sertifikasi)
    {
        return view('sertifikasi.show', compact('sertifikasi'));
    }

    // =================== ARTIKEL ===================
    public function artikelIndex()
    {
        $artikels = Artikel::latest()->paginate(self::PAGINATION_COUNT);
        return view('artikel.index', compact('artikels'));
    }

    public function artikelShow(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }

    // =================== KAJIAN ===================
    public function kajianIndex()
    {
        $kajians = Kajian::latest()->paginate(self::PAGINATION_COUNT);
        return view('kajian.index', compact('kajians'));
    }

    public function kajianShow(Kajian $kajian)
    {
        return view('kajian.show', compact('kajian'));
    }

    // =================== STAKEHOLDER ===================
    public function stakeholderIndex()
    {
        $stakeholders = Stakeholder::latest()->paginate(self::PAGINATION_COUNT);
        return view('stakeholder.index', compact('stakeholders'));
    }

    public function stakeholderShow(Stakeholder $stakeholder)
    {
        return view('stakeholder.show', compact('stakeholder'));
    }

    // =================== VIDEO ===================
    public function videoIndex()
    {
        $videos = Video::latest()->paginate(self::PAGINATION_COUNT);
        return view('video.index', compact('videos'));
    }

    public function videoShow(Video $video)
    {
        return view('video.show', compact('video'));
    }

    public function programIndex()
    {
        return view('program.index');
    }

    public function kawasanIndex()
    {
        $featuredKawasan = KawasanWisataHalal::with('dokumentasi')->latest()->first();

        $kawasans = KawasanWisataHalal::with('dokumentasi')
            ->when($featuredKawasan, function ($query) use ($featuredKawasan) {
                return $query->where('id', '!=', $featuredKawasan->id);
            })
            ->latest()
            ->paginate(8); 

        // PERUBAHAN DI SINI: Mengarah ke folder 'ekosistemhalal.kawasanwisata'
        return view('ekosistemhalal.kawasanwisata.index', compact('featuredKawasan', 'kawasans'));
    }
    
    public function sertifikasiHalalIndex()
    {
        // Ambil satu-satunya baris data link dari database
        $links = SertifikasiHalalLink::first();
        
        // Kirim data ke view 'sertifikasi-halal.index'
        return view('ekosistemhalal.sertifikasiproduk.index', compact('links'));
    }

    public function galeriInvestasiIndex()
    {
        // Ambil data foto dari model GisPesantren, urutkan dari yang terbaru
        $fotos = GisPesantren::latest()->paginate(12); // Mengambil 12 foto per halaman

        // Kirim data ke view dengan path yang benar
        return view('ekosistemhalal.galeryinvestasi.index', compact('fotos'));
    }

}

