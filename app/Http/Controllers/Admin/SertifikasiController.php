<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sertifikasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SertifikasiController extends Controller
{
    public function index()
    {
        // $title = 'Daftar Sertifikasi';
        // $items = Sertifikasi::all();
        // return view('admin.sertifikasis.index', compact('title', 'items'));

        $sertifikasis = Sertifikasi::latest()->paginate(10);
        return view('admin.sertifikasis.index', compact('sertifikasis'));
    }
    public function create()
    {
        // $title = 'Tambah Sertifikasi';
        // $action = route('admin.sertifikasis.store');
        // return view('admin.sertifikasis.create', compact('title', 'action'));

        return view('admin.sertifikasis.create');
    }
    public function store(Request $request)
    {
        // Sertifikasi::create($request->all());
        // return redirect()->route('admin.sertifikasis.index')->with('success', 'Data berhasil ditambahkan');

        $validated = $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'nomor_sertifikat' => 'nullable|string|max:255',
            'tanggal_terbit' => 'required|date',
            'tanggal_kedaluwarsa' => 'required|date|after:tanggal_terbit',
        ]);

        Sertifikasi::create($validated);
        return redirect()->route('admin.sertifikasis.index')->with('success', 'Sertifikasi berhasil ditambahkan.');
    }
    public function show(Sertifikasi $sertifikasi)
    {
        // $title = 'Detail Sertifikasi';
        // return view('admin.sertifikasis.show', compact('title', 'sertifikasi'));

        return view('admin.sertifikasis.show', compact('sertifikasi'));
    }
    public function edit(Sertifikasi $sertifikasi)
    {
        // $title = 'Edit Sertifikasi';
        // $action = route('admin.sertifikasis.update', $sertifikasi);
        // return view('admin.sertifikasis.edit', compact('title', 'action', 'sertifikasi'));

        return view('admin.sertifikasis.edit', compact('sertifikasi'));
    }
    public function update(Request $request, Sertifikasi $sertifikasi)
    {
        // $sertifikasi->update($request->all());
        // return redirect()->route('admin.sertifikasis.index')->with('success', 'Data berhasil diperbarui');

        $validated = $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'nomor_sertifikat' => 'nullable|string|max:255',
            'tanggal_terbit' => 'required|date',
            'tanggal_kedaluwarsa' => 'required|date|after:tanggal_terbit',
        ]);

        $sertifikasi->update($validated);
        return redirect()->route('admin.sertifikasis.index')->with('success', 'Sertifikasi berhasil diperbarui.');
    }
    public function destroy(Sertifikasi $sertifikasi)
    {
        $sertifikasi->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

