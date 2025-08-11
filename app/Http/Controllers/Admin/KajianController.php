<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kajian;
class KajianController extends Controller
{
    public function index()
    {
        $title = 'Daftar Kajian';
        $items = Kajian::all();
        return view('admin.kajians.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Kajian';
        $action = route('admin.kajians.store');
        return view('admin.kajians.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Kajian::create($request->all());
        return redirect()->route('admin.kajians.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Kajian $kajian)
    {
        $title = 'Detail Kajian';
        return view('admin.kajians.show', compact('title', 'kajian'));
    }
    public function edit(Kajian $kajian)
    {
        $title = 'Edit Kajian';
        $action = route('admin.kajians.update', $kajian);
        return view('admin.kajians.edit', compact('title', 'action', 'kajian'));
    }
    public function update(Request $request, Kajian $kajian)
    {
        $kajian->update($request->all());
        return redirect()->route('admin.kajians.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Kajian $kajian)
    {
        $kajian->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
