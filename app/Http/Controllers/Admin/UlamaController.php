<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UlamaController extends Controller
{
    public function index()
    {
        $ulamas = Ulama::latest()->paginate(10);
        return view('admin.ulama.index', compact('ulamas'));
    }

    public function create()
    {

        return view('admin.ulama.create');
    }

   public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'sejarah' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('ulama_fotos', 'public');
        }

        Ulama::create($validated);
        return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil ditambahkan.');
    }

    public function show(Ulama $ulama)
    {
        return view('admin.ulama.show', compact('ulama'));
    }

    public function edit(Ulama $ulama)
    {
        return view('admin.ulama.edit', compact('ulama'));
    }

    public function update(Request $request, Ulama $ulama)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'sejarah' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($ulama->foto) {
                Storage::disk('public')->delete($ulama->foto);
            }
            $validated['foto'] = $request->file('foto')->store('ulama_fotos', 'public');
        }

        $ulama->update($validated);
        return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil diperbarui.');
    }

    public function destroy(Ulama $ulama)
    {
        if ($ulama->foto) {
            Storage::disk('public')->delete($ulama->foto);
        }

        $ulama->delete();
        return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil dihapus.');
    }
}
