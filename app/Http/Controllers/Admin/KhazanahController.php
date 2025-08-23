<?php

namespace App\Http\Controllers\Admin;

use App\Models\Khazanah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KhazanahController extends Controller
{
    public function index()
    {
        $khazanahs = Khazanah::latest()->paginate(10);
        return view('admin.khazanah.index', compact('khazanahs'));
    }

    public function create()
    {
        return view('admin.khazanah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('khazanah', 'public');
            $validated['foto'] = $path;
        }

        Khazanah::create($validated);
        return redirect()->route('admin.khazanah.index')->with('success', 'Data Khazanah berhasil ditambahkan.');
    }

    public function show(Khazanah $khazanah)
    {
        return view('admin.khazanah.show', compact('khazanah'));
    }

    public function edit(Khazanah $khazanah)
    {
        return view('admin.khazanah.edit', compact('khazanah'));
    }

    public function update(Request $request, Khazanah $khazanah)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($khazanah->foto) {
                Storage::disk('public')->delete($khazanah->foto);
            }
            $path = $request->file('foto')->store('khazanah', 'public');
            $validated['foto'] = $path;
        }

        $khazanah->update($validated);
        return redirect()->route('admin.khazanah.index')->with('success', 'Data Khazanah berhasil diperbarui.');
    }

    public function destroy(Khazanah $khazanah)
    {
        if ($khazanah->foto) {
            Storage::disk('public')->delete($khazanah->foto);
        }
        $khazanah->delete();
        return redirect()->route('admin.khazanah.index')->with('success', 'Data Khazanah berhasil dihapus.');
    }
}
