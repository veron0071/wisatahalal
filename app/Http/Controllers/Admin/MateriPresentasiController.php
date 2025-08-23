<?php

namespace App\Http\Controllers\Admin;

use App\Models\MateriPresentasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MateriPresentasiController extends Controller
{
    public function index()
    {
        $materis = MateriPresentasi::latest()->paginate(10);
        return view('admin.materi-presentasi.index', compact('materis'));
    }

    public function create()
    {
        return view('admin.materi-presentasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file_presentasi' => 'required|file|mimes:pdf,doc,docx,ppt,pptx|max:20480', // Maks 20MB
        ]);

        $path = $request->file('file_presentasi')->store('materi-presentasi', 'public');
        $validated['file_presentasi'] = $path;

        MateriPresentasi::create($validated);
        return redirect()->route('admin.materi-presentasi.index')->with('success', 'Materi presentasi berhasil ditambahkan.');
    }

    public function show(MateriPresentasi $materi_presentasi)
    {
        return view('admin.materi-presentasi.show', ['materi' => $materi_presentasi]);
    }

    public function edit(MateriPresentasi $materi_presentasi)
    {
        return view('admin.materi-presentasi.edit', ['materi' => $materi_presentasi]);
    }

    public function update(Request $request, MateriPresentasi $materi_presentasi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'file_presentasi' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:20480',
        ]);

        if ($request->hasFile('file_presentasi')) {
            if ($materi_presentasi->file_presentasi) {
                Storage::disk('public')->delete($materi_presentasi->file_presentasi);
            }
            $path = $request->file('file_presentasi')->store('materi-presentasi', 'public');
            $validated['file_presentasi'] = $path;
        }

        $materi_presentasi->update($validated);
        return redirect()->route('admin.materi-presentasi.index')->with('success', 'Materi presentasi berhasil diperbarui.');
    }

    public function destroy(MateriPresentasi $materi_presentasi)
    {
        if ($materi_presentasi->file_presentasi) {
            Storage::disk('public')->delete($materi_presentasi->file_presentasi);
        }
        $materi_presentasi->delete();
        return redirect()->route('admin.materi-presentasi.index')->with('success', 'Materi presentasi berhasil dihapus.');
    }
}
