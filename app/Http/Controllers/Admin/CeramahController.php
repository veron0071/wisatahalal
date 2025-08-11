<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ceramah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CeramahController extends Controller
{
   public function index()
{
    $title = 'Daftar Ceramah';
    $ceramahs = Ceramah::all(); // ambil semua data ceramah
    return view('admin.ceramahs.index', compact('ceramahs', 'title'));
}

    public function create()
    {
        $title = 'Tambah Ceramah';
        $action = route('admin.ceramahs.store');
         $isEdit = false;
        return view('admin.ceramahs.create', compact('title', 'action', 'isEdit'));
    }
    public function store(Request $request)
    {
        Ceramah::create($request->all());
        return redirect()->route('admin.ceramahs.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Ceramah $ceramah)
    {
        $title = 'Detail Ceramah';
        return view('admin.ceramahs.show', compact('title', 'ceramah'));
    }
    public function edit(Ceramah $ceramah)
    {
        $title = 'Edit Ceramah';
        $action = route('admin.ceramahs.update', $ceramah);
        return view('admin.ceramahs.edit', compact('title', 'action', 'ceramah'));
    }
    public function update(Request $request, Ceramah $ceramah)
    {
        $ceramah->update($request->all());
        return redirect()->route('admin.ceramahs.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Ceramah $ceramah)
    {
        $ceramah->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}