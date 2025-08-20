<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ziarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZiarahController extends Controller
{
    public function index()
    {
        $ziarahs = Ziarah::latest()->paginate(10);
        return view('admin.ziarahs.index', compact('ziarahs'));
    }

    public function create()
    {
        return view('admin.ziarahs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'google_maps_link' => 'required|url',
        ]);

        Ziarah::create($validated);
        return redirect()->route('admin.ziarahs.index')->with('success', 'Data lokasi ziarah berhasil ditambahkan.');
    }

    public function show(Ziarah $ziarah)
    {
        return view('admin.ziarahs.show', compact('ziarah'));
    }

    public function edit(Ziarah $ziarah)
    {
        return view('admin.ziarahs.edit', compact('ziarah'));
    }

    public function update(Request $request, Ziarah $ziarah)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'google_maps_link' => 'required|url',
        ]);

        $ziarah->update($validated);
        return redirect()->route('admin.ziarahs.index')->with('success', 'Data lokasi ziarah berhasil diperbarui.');
    }

    public function destroy(Ziarah $ziarah)
    {
        $ziarah->delete();
        return redirect()->route('admin.ziarahs.index')->with('success', 'Data lokasi ziarah berhasil dihapus.');
    }
}
