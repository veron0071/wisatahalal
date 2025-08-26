<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        // Ambil semua data publikasi untuk difilter di frontend
        return view('publikasi.index');
    }
}