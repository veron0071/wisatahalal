<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Manuskrip;

class ManuskripController extends Controller
{
    public function index()
    {
        $title = 'Daftar Manuskrip';
        $items = Manuskrip::all();
        return view('admin.manuskrips.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Manuskrip';
        $action = route('admin.manuskrips.store');
        return view('admin.manuskrips.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Manuskrip::create($request->all());
        return redirect()->route('admin.manuskrips.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Manuskrip $manuskrip)
    {
        $title = 'Detail Manuskrip';
        return view('admin.manuskrips.show', compact('title', 'manuskrip'));
    }
    public function edit(Manuskrip $manuskrip)
    {
        $title = 'Edit Manuskrip';
        $action = route('admin.manuskrips.update', $manuskrip);
        return view('admin.manuskrips.edit', compact('title', 'action', 'manuskrip'));
    }
    public function update(Request $request, Manuskrip $manuskrip)
    {
        $manuskrip->update($request->all());
        return redirect()->route('admin.manuskrips.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Manuskrip $manuskrip)
    {
        $manuskrip->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

