<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Heritage;
class HeritageController extends Controller
{
    public function index()
    {
        $title = 'Daftar Heritage';
        $items = Heritage::all();
        return view('admin.heritages.index', compact('title', 'items'));
    }
    public function create()
    {
        $title = 'Tambah Heritage';
        $action = route('admin.heritages.store');
        return view('admin.heritages.create', compact('title', 'action'));
    }
    public function store(Request $request)
    {
        Heritage::create($request->all());
        return redirect()->route('admin.heritages.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function show(Heritage $heritage)
    {
        $title = 'Detail Heritage';
        return view('admin.heritages.show', compact('title', 'heritage'));
    }
    public function edit(Heritage $heritage)
    {
        $title = 'Edit Heritage';
        $action = route('admin.heritages.update', $heritage);
        return view('admin.heritages.edit', compact('title', 'action', 'heritage'));
    }
    public function update(Request $request, Heritage $heritage)
    {
        $heritage->update($request->all());
        return redirect()->route('admin.heritages.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy(Heritage $heritage)
    {
        $heritage->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

