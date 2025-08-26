<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublikasiController extends Controller
{
    private $kategoriOptions = [
        'Buku',
        'Khazanah',
        'Peringatan Hari Besar',
        'Artikel Ilmiah',
        'Materi Presentasi',
        'Laporan Pertanggung Jawaban'
    ];

    public function index()
    {
        $publikasis = Publikasi::latest()->paginate(10);
        return view('admin.publikasi.index', compact('publikasis'));
    }

    public function create()
    {
        return view('admin.publikasi.create', ['kategoriOptions' => $this->kategoriOptions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|in:' . implode(',', $this->kategoriOptions),
            'nama' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,jpg,jpeg,png|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('publikasi', 'public');
        }

        Publikasi::create($validated);

        return redirect()->route('admin.publikasi.index')->with('success', 'Publikasi berhasil ditambahkan.');
    }

    public function edit(Publikasi $publikasi)
    {
        return view('admin.publikasi.edit', [
            'publikasi' => $publikasi,
            'kategoriOptions' => $this->kategoriOptions
        ]);
    }

    public function update(Request $request, Publikasi $publikasi)
    {
        $validated = $request->validate([
            'kategori' => 'required|in:' . implode(',', $this->kategoriOptions),
            'nama' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,jpg,jpeg,png|max:10240'
        ]);

        if ($request->hasFile('file')) {
            if ($publikasi->file && Storage::disk('public')->exists($publikasi->file)) {
                Storage::disk('public')->delete($publikasi->file);
            }
            $validated['file'] = $request->file('file')->store('publikasi', 'public');
        }

        $publikasi->update($validated);

        return redirect()->route('admin.publikasi.index')->with('success', 'Publikasi berhasil diperbarui.');
    }

    public function destroy(Publikasi $publikasi)
    {
        if ($publikasi->file && Storage::disk('public')->exists($publikasi->file)) {
            Storage::disk('public')->delete($publikasi->file);
        }
        $publikasi->delete();

        return redirect()->route('admin.publikasi.index')->with('success', 'Publikasi berhasil dihapus.');
    }
}
