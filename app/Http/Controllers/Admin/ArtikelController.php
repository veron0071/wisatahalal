<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Artikel;
class ArtikelController extends Controller
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $items = Artikel::all();
        return view('admin.artikels.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Artikel';
        $action = route('admin.artikels.store');
        return view('admin.artikels.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Artikel::create($request->all());
        return redirect()->route('admin.artikels.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Artikel $artikel)
    {
        $title = 'Detail Artikel';
        return view('admin.artikels.show', compact('title', 'artikel'));
    }
    public function edit(Artikel $artikel)
    {
        $title = 'Edit Artikel';
        $action = route('admin.artikels.update', $artikel);
        return view('admin.artikels.edit', compact('title', 'action', 'artikel'));
    }
    public function update(Request $request, Artikel $artikel)
    {
        $artikel->update($request->all());
        return redirect()->route('admin.artikels.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}