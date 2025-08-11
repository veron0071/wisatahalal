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
    // =================== ULAMA ===================
    public function ulamaIndex()
    {
        $ulamas = Ulama::paginate(10);
        return view('ulama.index', compact('ulamas'));
    }

    public function ulamaShow(Ulama $ulama)
    {
        return view('ulama.show', compact('ulama'));
    }

    // =================== FASILITAS ===================
    public function fasilitasIndex()
    {
        $fasilitas = Fasilitas::paginate(10);
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function fasilitasShow(Fasilitas $fasilitas)
    {
        return view('fasilitas.show', compact('fasilitas'));
    }

    // =================== UMKM ===================
    public function umkmIndex()
    {
        $umkms = Umkm::paginate(10);
        return view('umkm.index', compact('umkms'));
    }

    public function umkmShow(Umkm $umkm)
    {
        return view('umkm.show', compact('umkm'));
    }

    // =================== CERAMAH ===================
    public function ceramahIndex()
    {
        $ceramahs = Ceramah::paginate(10);
        return view('ceramah.index', compact('ceramahs'));
    }

    public function ceramahShow(Ceramah $ceramah)
    {
        return view('ceramah.show', compact('ceramah'));
    }

    // =================== HERITAGE ===================
    public function heritageIndex()
    {
        $heritages = Heritage::paginate(10);
        return view('heritage.index', compact('heritages'));
    }

    public function heritageShow(Heritage $heritage)
    {
        return view('heritage.show', compact('heritage'));
    }

    // =================== ZIARAH ===================
    public function ziarahIndex()
    {
        $ziarahs = Ziarah::paginate(10);
        return view('ziarah.index', compact('ziarahs'));
    }

    public function ziarahShow(Ziarah $ziarah)
    {
        return view('ziarah.show', compact('ziarah'));
    }

    // =================== MANUSKRIP ===================
    public function manuskripIndex()
    {
        $manuskrips = Manuskrip::paginate(10);
        return view('manuskrip.index', compact('manuskrips'));
    }

    public function manuskripShow(Manuskrip $manuskrip)
    {
        return view('manuskrip.show', compact('manuskrip'));
    }

    // =================== PAKET WISATA ===================
    public function paketWisataIndex()
    {
        $paketWisatas = PaketWisata::paginate(10);
        return view('paketwisata.index', compact('paketWisatas'));
    }

    public function paketWisataShow(PaketWisata $paketWisata)
    {
        return view('paketwisata.show', compact('paketWisata'));
    }

    // =================== LOKASI ZIARAH ===================
    public function lokasiZiarahIndex()
    {
        $lokasiZiarahs = LokasiZiarah::paginate(10);
        return view('lokasiziayah.index', compact('lokasiZiarahs'));
    }

    public function lokasiZiarahShow(LokasiZiarah $lokasiZiarah)
    {
        return view('lokasiziayah.show', compact('lokasiZiarah'));
    }

    // =================== PELATIHAN ===================
    public function pelatihanIndex()
    {
        $pelatihans = Pelatihan::paginate(10);
        return view('pelatihan.index', compact('pelatihans'));
    }

    public function pelatihanShow(Pelatihan $pelatihan)
    {
        return view('pelatihan.show', compact('pelatihan'));
    }

    // =================== SERTIFIKASI ===================
    public function sertifikasiIndex()
    {
        $sertifikasis = Sertifikasi::paginate(10);
        return view('sertifikasi.index', compact('sertifikasis'));
    }

    public function sertifikasiShow(Sertifikasi $sertifikasi)
    {
        return view('sertifikasi.show', compact('sertifikasi'));
    }

    // =================== ARTIKEL ===================
    public function artikelIndex()
    {
        $artikels = Artikel::paginate(10);
        return view('artikel.index', compact('artikels'));
    }

    public function artikelShow(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }

    // =================== KAJIAN ===================
    public function kajianIndex()
    {
        $kajians = Kajian::paginate(10);
        return view('kajian.index', compact('kajians'));
    }

    public function kajianShow(Kajian $kajian)
    {
        return view('kajian.show', compact('kajian'));
    }

    // =================== STAKEHOLDER ===================
    public function stakeholderIndex()
    {
        $stakeholders = Stakeholder::paginate(10);
        return view('stakeholder.index', compact('stakeholders'));
    }

    public function stakeholderShow(Stakeholder $stakeholder)
    {
        return view('stakeholder.show', compact('stakeholder'));
    }

    // =================== VIDEO ===================
    public function videoIndex()
    {
        $videos = Video::paginate(10);
        return view('video.index', compact('videos'));
    }

    public function videoShow(Video $video)
    {
        return view('video.show', compact('video'));
    }
}
