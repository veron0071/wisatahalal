<?php

namespace App\Http\Controllers;

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

class WisataController extends Controller
{

    private const PAGINATION_COUNT = 9;

    // =================== ULAMA ===================
    public function ulamaIndex()
    {
        $ulamas = Ulama::latest()->paginate(self::PAGINATION_COUNT);
        return view('ulama.index', compact('ulamas'));
    }

    public function ulamaShow(Ulama $ulama)
    {
        return view('ulama.show', compact('ulama'));
    }

    // =================== FASILITAS ===================
    public function fasilitasIndex()
    {
        // Perbaikan: $fasilitas -> $fasilitass
        $fasilitass = Fasilitas::latest()->paginate(self::PAGINATION_COUNT);
        return view('fasilitas.index', compact('fasilitass'));
    }

    public function fasilitasShow(Fasilitas $fasilitas)
    {
        return view('fasilitas.show', compact('fasilitas'));
    }

    // =================== UMKM ===================
    public function umkmIndex()
    {
        $umkms = Umkm::latest()->paginate(self::PAGINATION_COUNT);
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
    public function ziarahIndex()
    {
        $ziarahs = Ziarah::latest()->paginate(self::PAGINATION_COUNT);
        return view('ziarah.index', compact('ziarahs'));
    }

    public function ziarahShow(Ziarah $ziarah)
    {
        return view('ziarah.show', compact('ziarah'));
    }

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
}
