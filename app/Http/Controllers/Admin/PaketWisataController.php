<?php

namespace App\Http\Controllers\Admin;

use App\Models\PaketWisata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PaketWisataController extends Controller
{
    public function index()
    {
        // $title = 'Daftar Paket Wisata';
        // $items = PaketWisata::all();
        // return view('admin.paketwisatas.index', compact('title', 'items'));

        $paketwisatas = PaketWisata::latest()->paginate(10);
        return view('admin.paketwisatas.index', compact('paketwisatas'));
    }
    public function create()
    {
        // $title = 'Tambah Paket Wisata';
        // $action = route('admin.paketwisatas.store');
        // return view('admin.paketwisatas.create', compact('title', 'action'));

        return view('admin.paketwisatas.create');
    }
    public function store(Request $request)
    {
        // PaketWisata::create($request->all());
        // return redirect()->route('admin.paketwisatas.index')->with('success', 'Data berhasil ditambahkan');

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer|min:0',
            'fasilitas' => 'nullable|string',
        ]);

        PaketWisata::create($validated);
        return redirect()->route('admin.paketwisatas.index')->with('success', 'Paket wisata berhasil ditambahkan.');
    }
    public function show(PaketWisata $paketwisata)
    {
        // $title = 'Detail Paket Wisata';
        // return view('admin.paketwisatas.show', compact('title', 'paketwisata'));

        return view('admin.paketwisatas.show', compact('paketwisata'));
    }
    public function edit(PaketWisata $paketwisata)
    {
        // $title = 'Edit Paket Wisata';
        // $action = route('admin.paketwisatas.update', $paketwisata);
        // return view('admin.paketwisatas.edit', compact('title', 'action', 'paketwisata'));

        return view('admin.paketwisatas.edit', compact('paketwisata'));
    }
    public function update(Request $request, PaketWisata $paketwisata)
    {
        // $paketwisata->update($request->all());
        // return redirect()->route('admin.paketwisatas.index')->with('success', 'Data berhasil diperbarui');

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer|min:0',
            'fasilitas' => 'nullable|string',
        ]);

        $paketwisata->update($validated);
        return redirect()->route('admin.paketwisatas.index')->with('success', 'Paket wisata berhasil diperbarui.');
    }
    public function destroy(PaketWisata $paketwisata)
    {
        $paketwisata->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}


