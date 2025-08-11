<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ziarah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZiarahController extends Controller
{
    public function index()
    {
        $title = 'Daftar Ziarah';
        $items = Ziarah::all();
        return view('admin.ziarahs.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Ziarah';
        $action = route('admin.ziarahs.store');
        return view('admin.ziarahs.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Ziarah::create($request->all());
        return redirect()->route('admin.ziarahs.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Ziarah $ziarah)
    {
        $title = 'Detail Ziarah';
        return view('admin.ziarahs.show', compact('title', 'ziarah'));
    }
    public function edit(Ziarah $ziarah)
    {
        $title = 'Edit Ziarah';
        $action = route('admin.ziarahs.update', $ziarah);
        return view('admin.ziarahs.edit', compact('title', 'action', 'ziarah'));
    }
    public function update(Request $request, Ziarah $ziarah)
    {
        $ziarah->update($request->all());
        return redirect()->route('admin.ziarahs.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Ziarah $ziarah)
    {
        $ziarah->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

