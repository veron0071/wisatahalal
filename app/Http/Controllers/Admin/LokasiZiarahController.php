<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\LokasiZiarah;
class LokasiZiarahController extends Controller
{
    public function index()
    {
        $title = 'Daftar Lokasi Ziarah';
        $items = LokasiZiarah::all();
        return view('admin.lokasiziarahs.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Lokasi Ziarah';
        $action = route('admin.lokasiziarahs.store');
        return view('admin.lokasiziarahs.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        LokasiZiarah::create($request->all());
        return redirect()->route('admin.lokasiziarahs.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(LokasiZiarah $lokasiziarah)
    {
        $title = 'Detail Lokasi Ziarah';
        return view('admin.lokasiziarahs.show', compact('title', 'lokasiziarah'));
    }
    public function edit(LokasiZiarah $lokasiziarah)
    {
        $title = 'Edit Lokasi Ziarah';
        $action = route('admin.lokasiziarahs.update', $lokasiziarah);
        return view('admin.lokasiziarahs.edit', compact('title', 'action', 'lokasiziarah'));
    }
    public function update(Request $request, LokasiZiarah $lokasiziarah)
    {
        $lokasiziarah->update($request->all());
        return redirect()->route('admin.lokasiziarahs.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(LokasiZiarah $lokasiziarah)
    {
        $lokasiziarah->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
