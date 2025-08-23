<?php

namespace App\Http\Controllers\Admin;

use App\Models\Phbn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhbnController extends Controller
{
    public function index()
    {
        $phbns = Phbn::latest()->paginate(10);
        return view('admin.phbn.index', compact('phbns'));
    }

    public function create()
    {
        return view('admin.phbn.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('phbn', 'public');
        }

        Phbn::create($validated);
        return redirect()->route('admin.phbn.index')->with('success', 'Data PHBN berhasil ditambahkan.');
    }

    public function show(Phbn $phbn)
    {
        return view('admin.phbn.show', compact('phbn'));
    }

    public function edit(Phbn $phbn)
    {
        return view('admin.phbn.edit', compact('phbn'));
    }

    public function update(Request $request, Phbn $phbn)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($phbn->foto) Storage::disk('public')->delete($phbn->foto);
            $validated['foto'] = $request->file('foto')->store('phbn', 'public');
        }

        $phbn->update($validated);
        return redirect()->route('admin.phbn.index')->with('success', 'Data PHBN berhasil diperbarui.');
    }

    public function destroy(Phbn $phbn)
    {
        if ($phbn->foto) Storage::disk('public')->delete($phbn->foto);
        $phbn->delete();
        return redirect()->route('admin.phbn.index')->with('success', 'Data PHBN berhasil dihapus.');
    }
}
