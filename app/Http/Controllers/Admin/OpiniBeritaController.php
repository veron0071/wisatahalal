<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OpiniBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpiniBeritaController extends Controller
{
    public function index()
    {
        $opiniBeritas = OpiniBerita::latest()->paginate(10);
        return view('admin.opini-berita.index', compact('opiniBeritas'));
    }

    public function create()
    {
        return view('admin.opini-berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240' // Maks. 10MB
        ]);

        $validated['file'] = $request->file('file')->store('opini-berita', 'public');

        OpiniBerita::create($validated);

        return redirect()->route('admin.opini-berita.index')->with('success', 'Opini & Berita berhasil ditambahkan.');
    }

    public function edit(OpiniBerita $opiniBeritum)
    {
        return view('admin.opini-berita.edit', ['opiniBerita' => $opiniBeritum]);
    }

    public function update(Request $request, OpiniBerita $opiniBeritum)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            if ($opiniBeritum->file && Storage::disk('public')->exists($opiniBeritum->file)) {
                Storage::disk('public')->delete($opiniBeritum->file);
            }
            $validated['file'] = $request->file('file')->store('opini-berita', 'public');
        }

        $opiniBeritum->update($validated);

        return redirect()->route('admin.opini-berita.index')->with('success', 'Opini & Berita berhasil diperbarui.');
    }

    public function destroy(OpiniBerita $opiniBeritum)
    {
        if ($opiniBeritum->file && Storage::disk('public')->exists($opiniBeritum->file)) {
            Storage::disk('public')->delete($opiniBeritum->file);
        }
        $opiniBeritum->delete();

        return redirect()->route('admin.opini-berita.index')->with('success', 'Opini & Berita berhasil dihapus.');
    }
}
