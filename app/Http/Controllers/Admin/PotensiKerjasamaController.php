<?php

namespace App\Http\Controllers\Admin;

use App\Models\PotensiKerjasama;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PotensiKerjasamaController extends Controller
{
    public function index()
    {
        $items = PotensiKerjasama::latest()->paginate(10);
        return view('admin.potensi-kerjasama.index', compact('items'));
    }

    public function create()
    {
        return view('admin.potensi-kerjasama.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_mitra' => 'required|string|max:255',
            'mitra_potensial' => 'required|string',
            'isu_need_utama' => 'required|string',
            'nilai_tambah_pd_mes' => 'required|string',
        ]);

        PotensiKerjasama::create($validated);
        return redirect()->route('admin.potensi-kerjasama.index')->with('success', 'Data potensi kerjasama berhasil ditambahkan.');
    }

    public function show(PotensiKerjasama $potensiKerjasama)
    {
        return view('admin.potensi-kerjasama.show', ['item' => $potensiKerjasama]);
    }

    public function edit(PotensiKerjasama $potensiKerjasama)
    {
        return view('admin.potensi-kerjasama.edit', ['item' => $potensiKerjasama]);
    }

    public function update(Request $request, PotensiKerjasama $potensiKerjasama)
    {
        $validated = $request->validate([
            'kategori_mitra' => 'required|string|max:255',
            'mitra_potensial' => 'required|string',
            'isu_need_utama' => 'required|string',
            'nilai_tambah_pd_mes' => 'required|string',
        ]);

        $potensiKerjasama->update($validated);
        return redirect()->route('admin.potensi-kerjasama.index')->with('success', 'Data potensi kerjasama berhasil diperbarui.');
    }

    public function destroy(PotensiKerjasama $potensiKerjasama)
    {
        $potensiKerjasama->delete();
        return redirect()->route('admin.potensi-kerjasama.index')->with('success', 'Data potensi kerjasama berhasil dihapus.');
    }
}
