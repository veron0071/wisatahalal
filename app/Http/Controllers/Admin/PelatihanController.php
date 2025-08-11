<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pelatihan;
class PelatihanController extends Controller
{
    public function index()
    {
        $title = 'Daftar Pelatihan';
        $items = Pelatihan::all();
        return view('admin.pelatihans.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Pelatihan';
        $action = route('admin.pelatihans.store');
        return view('admin.pelatihans.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Pelatihan::create($request->all());
        return redirect()->route('admin.pelatihans.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Pelatihan $pelatihan)
    {
        $title = 'Detail Pelatihan';
        return view('admin.pelatihans.show', compact('title', 'pelatihan'));
    }
    public function edit(Pelatihan $pelatihan)
    {
        $title = 'Edit Pelatihan';
        $action = route('admin.pelatihans.update', $pelatihan);
        return view('admin.pelatihans.edit', compact('title', 'action', 'pelatihan'));
    }
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $pelatihan->update($request->all());
        return redirect()->route('admin.pelatihans.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
