<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sertifikasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SertifikasiController extends Controller
{
    public function index()
    {
        $title = 'Daftar Sertifikasi';
        $items = Sertifikasi::all();
        return view('admin.sertifikasis.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Sertifikasi';
        $action = route('admin.sertifikasis.store');
        return view('admin.sertifikasis.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Sertifikasi::create($request->all());
        return redirect()->route('admin.sertifikasis.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Sertifikasi $sertifikasi)
    {
        $title = 'Detail Sertifikasi';
        return view('admin.sertifikasis.show', compact('title', 'sertifikasi'));
    }
    public function edit(Sertifikasi $sertifikasi)
    {
        $title = 'Edit Sertifikasi';
        $action = route('admin.sertifikasis.update', $sertifikasi);
        return view('admin.sertifikasis.edit', compact('title', 'action', 'sertifikasi'));
    }
    public function update(Request $request, Sertifikasi $sertifikasi)
    {
        $sertifikasi->update($request->all());
        return redirect()->route('admin.sertifikasis.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Sertifikasi $sertifikasi)
    {
        $sertifikasi->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

