<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index(Request $request)
    {
        $kategoris = Publikasi::select('kategori')->distinct()->pluck('kategori');
        $selectedKategori = $request->query('kategori', 'Buku');
        $publikasiItems = Publikasi::where('kategori', $selectedKategori)
                                ->latest()
                                ->get();

        return view('publikasi.index', compact('kategoris', 'selectedKategori', 'publikasiItems'));
    }
}
