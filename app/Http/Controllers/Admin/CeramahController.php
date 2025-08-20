<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ceramah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CeramahController extends Controller
{
    public function index()
    {
        $ceramahs = Ceramah::latest()->paginate(10);
        return view('admin.ceramahs.index', compact('ceramahs'));
    }

    public function create()
    {
        return view('admin.ceramahs.create');
    }

    public function store(Request $request)
    {
        // Menambahkan validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'pemateri' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'video_url' => 'nullable|url',
        ]);

        Ceramah::create($validated);

        return redirect()->route('admin.ceramahs.index')->with('success', 'Data ceramah berhasil ditambahkan.');
    }

    public function show(Ceramah $ceramah)
    {
        return view('admin.ceramahs.show', compact('ceramah'));
    }

    public function edit(Ceramah $ceramah)
    {
        return view('admin.ceramahs.edit', compact('ceramah'));
    }

    public function update(Request $request, Ceramah $ceramah)
    {
        // Menambahkan validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'pemateri' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'video_url' => 'nullable|url',
        ]);

        $ceramah->update($validated);

        return redirect()->route('admin.ceramahs.index')->with('success', 'Data ceramah berhasil diperbarui.');
    }

    public function destroy(Ceramah $ceramah)
    {
        $ceramah->delete();
        // Mengarahkan kembali ke halaman index untuk UX yang lebih baik
        return redirect()->route('admin.ceramahs.index')->with('success', 'Data ceramah berhasil dihapus.');
    }
}
