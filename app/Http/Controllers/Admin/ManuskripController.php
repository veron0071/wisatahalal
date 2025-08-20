<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Manuskrip;

class ManuskripController extends Controller
{
    public function index()
    {
        // $title = 'Daftar Manuskrip';
        // $items = Manuskrip::all();
        // return view('admin.manuskrips.index', compact('title', 'items'));

        $manuskrips = Manuskrip::latest()->paginate(10);
        return view('admin.manuskrips.index', compact('manuskrips'));
    }
    public function create()
    {
        // $title = 'Tambah Manuskrip';
        // $action = route('admin.manuskrips.store');
        // return view('admin.manuskrips.create', compact('title', 'action'));

        return view('admin.manuskrips.create');
    }
    public function store(Request $request)
    {
        // Manuskrip::create($request->all());
        // return redirect()->route('admin.manuskrips.index')->with('success', 'Data berhasil ditambahkan');

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file_url' => 'required|file|mimes:pdf,doc,docx|max:10240', // Maks 10MB
        ]);

        if ($request->hasFile('file_url')) {
            $path = $request->file('file_url')->store('manuskrips', 'public');
            $validated['file_url'] = $path;
        }

        Manuskrip::create($validated);
        return redirect()->route('admin.manuskrips.index')->with('success', 'Manuskrip berhasil diarsipkan.');
    }
    public function show(Manuskrip $manuskrip)
    {
        // $title = 'Detail Manuskrip';
        // return view('admin.manuskrips.show', compact('title', 'manuskrip'));

        return view('admin.manuskrips.show', compact('manuskrip'));
    }
    public function edit(Manuskrip $manuskrip)
    {
        // $title = 'Edit Manuskrip';
        // $action = route('admin.manuskrips.update', $manuskrip);
        // return view('admin.manuskrips.edit', compact('title', 'action', 'manuskrip'));

        return view('admin.manuskrips.edit', compact('manuskrip'));
    }
    public function update(Request $request, Manuskrip $manuskrip)
    {
        // $manuskrip->update($request->all());
        // return redirect()->route('admin.manuskrips.index')->with('success', 'Data berhasil diperbarui');

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx|max:10240', // File tidak wajib saat update
        ]);

        // Handle file upload jika ada file baru
        if ($request->hasFile('file_url')) {
            if ($manuskrip->file_url) {
                Storage::disk('public')->delete($manuskrip->file_url);
            }
            $path = $request->file('file_url')->store('manuskrips', 'public');
            $validated['file_url'] = $path;
        }

        $manuskrip->update($validated);
        return redirect()->route('admin.manuskrips.index')->with('success', 'Manuskrip berhasil diperbarui.');
    }
    public function destroy(Manuskrip $manuskrip)
    {
        $manuskrip->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}

