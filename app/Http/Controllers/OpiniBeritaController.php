<?php

namespace App\Http\Controllers;

use App\Models\OpiniBerita; // 1. Pastikan Model ini di-import
use Illuminate\Http\Request;

class OpiniBeritaController extends Controller
{
    public function index()
    {
        // 2. Ambil data dari database, urutkan dari yang terbaru
        $opiniBeritas = OpiniBerita::latest()->paginate(9);
        
        // 3. Kirim data ke view 'opiniberita.index'
        return view('opiniberita.index', compact('opiniBeritas'));
    }

    // Anda bisa menambahkan method 'show' di sini nanti untuk detail berita
    // public function show(OpiniBerita $opiniBerita) { ... }
}