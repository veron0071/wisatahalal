<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpiniBeritaController extends Controller
{
    public function index()
    {
        // Untuk saat ini, kita hanya menampilkan view-nya.
        // Nanti, di sinilah Anda akan mengambil data berita dari database.
        // Contoh: $beritas = Berita::latest()->paginate(9);
        // return view('berita.index', compact('beritas'));
        
        return view('opiniberita.index');
    }

    // Anda bisa menambahkan method 'show' di sini nanti untuk detail berita
    // public function show($slug) { ... }
}