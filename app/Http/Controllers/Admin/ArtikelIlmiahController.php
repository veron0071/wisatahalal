<?php

namespace App\Http\Controllers\Admin;

use App\Models\ArtikelIlmiah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtikelIlmiahController extends Controller
{
    public function index()
    {
        $artikels = ArtikelIlmiah::latest()->paginate(10);
        return view('admin.artikel-ilmiah.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel-ilmiah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file_artikel' => 'required|file|mimes:pdf,doc,docx|max:10240', // Maks 10MB
        ]);

        $path = $request->file('file_artikel')->store('artikel-ilmiah', 'public');
        $validated['file_artikel'] = $path;

        ArtikelIlmiah::create($validated);
        return redirect()->route('admin.artikel-ilmiah.index')->with('success', 'Artikel ilmiah berhasil ditambahkan.');
    }

    public function show(ArtikelIlmiah $artikel_ilmiah)
    {
        return view('admin.artikel-ilmiah.show', ['artikel' => $artikel_ilmiah]);
    }

    public function edit(ArtikelIlmiah $artikel_ilmiah)
    {
        return view('admin.artikel-ilmiah.edit', ['artikel' => $artikel_ilmiah]);
    }

    public function update(Request $request, ArtikelIlmiah $artikel_ilmiah)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file_artikel' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($request->hasFile('file_artikel')) {
            if ($artikel_ilmiah->file_artikel) {
                Storage::disk('public')->delete($artikel_ilmiah->file_artikel);
            }
            $path = $request->file('file_artikel')->store('artikel-ilmiah', 'public');
            $validated['file_artikel'] = $path;
        }

        $artikel_ilmiah->update($validated);
        return redirect()->route('admin.artikel-ilmiah.index')->with('success', 'Artikel ilmiah berhasil diperbarui.');
    }

    public function destroy(ArtikelIlmiah $artikel_ilmiah)
    {
        if ($artikel_ilmiah->file_artikel) {
            Storage::disk('public')->delete($artikel_ilmiah->file_artikel);
        }
        $artikel_ilmiah->delete();
        return redirect()->route('admin.artikel-ilmiah.index')->with('success', 'Artikel ilmiah berhasil dihapus.');
    }
}
