<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilLembaga;
use App\Models\VisiMisi;
use App\Models\StrukturOrganisasi;
use App\Models\Roadmap;
use App\Models\PotensiKerjasama;

class TentangKamiController extends Controller
{
    public function profil()
    {
        $profil = ProfilLembaga::first();
        return view('TentangKami.ProfilMES.index', compact('profil'));
    }

    // Method untuk halaman Visi Misi (Dinamis)
    public function visiMisi()
    {
        $visiMisi = VisiMisi::first();
        return view('TentangKami.VisiMisi.index', compact('visiMisi'));
    }

    public function strukturOrganisasi()
    {
        $struktur = StrukturOrganisasi::first();
        return view('TentangKami.StrukturOrganisasi.index', compact('struktur'));
    }

    public function roadmapOrganisasi()
    {
        $roadmap = Roadmap::first();
        return view('TentangKami.RoadmapOrganisasi.index', compact('roadmap'));
    }

    public function sebaranPotensi()
    {
        $items = PotensiKerjasama::all();
        return view('TentangKami.SebaranPotensi.index', compact('items'));
    }
}
