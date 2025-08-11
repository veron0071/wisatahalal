<?php

namespace App\Http\Controllers\Admin;

use App\Models\PaketWisata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PaketWisataController extends Controller
{
    public function index()
    {
        $title = 'Daftar Paket Wisata';
        $items = PaketWisata::all();
        return view('admin.paketwisatas.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Paket Wisata';
        $action = route('admin.paketwisatas.store');
        return view('admin.paketwisatas.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        PaketWisata::create($request->all());
        return redirect()->route('admin.paketwisatas.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(PaketWisata $paketwisata)
    {
        $title = 'Detail Paket Wisata';
        return view('admin.paketwisatas.show', compact('title', 'paketwisata'));
    }
    public function edit(PaketWisata $paketwisata)
    {
        $title = 'Edit Paket Wisata';
        $action = route('admin.paketwisatas.update', $paketwisata);
        return view('admin.paketwisatas.edit', compact('title', 'action', 'paketwisata'));
    }
    public function update(Request $request, PaketWisata $paketwisata)
    {
        $paketwisata->update($request->all());
        return redirect()->route('admin.paketwisatas.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(PaketWisata $paketwisata)
    {
        $paketwisata->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}


