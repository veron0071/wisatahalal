<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $fotos = Galeri::latest()->paginate(9);
        return view('galeri.index', compact('fotos'));
    }
}
