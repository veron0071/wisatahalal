<?php

namespace App\Http\Controllers\Admin;

use App\Models\Umkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->paginate(10);
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'nama_pemilik' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi_produk' => 'nullable|string',
            'sertifikat_halal' => 'nullable|boolean',
            'foto' => 'required_if:sertifikat_halal,1|nullable|image|max:2048',
            'file_sertifikat' => 'required_if:sertifikat_halal,1|nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $validated['sertifikat_halal'] = $request->has('sertifikat_halal');

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('umkm/fotos', 'public');
        }

        if ($request->hasFile('file_sertifikat')) {
            $validated['file_sertifikat'] = $request->file('file_sertifikat')->store('umkm/sertifikat', 'public');
        }

        Umkm::create($validated);
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    public function show(Umkm $umkm)
    {
        return view('admin.umkm.show', compact('umkm'));
    }

    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'nama_pemilik' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi_produk' => 'nullable|string',
            'sertifikat_halal' => 'nullable|boolean',
            'foto' => 'required_if:sertifikat_halal,1|nullable|image|max:2048',
            'file_sertifikat' => 'required_if:sertifikat_halal,1|nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $validated['sertifikat_halal'] = $request->has('sertifikat_halal');

        if ($request->hasFile('foto')) {
            if ($umkm->foto) Storage::disk('public')->delete($umkm->foto);
            $validated['foto'] = $request->file('foto')->store('umkm/fotos', 'public');
        }

        if ($request->hasFile('file_sertifikat')) {
            if ($umkm->file_sertifikat) Storage::disk('public')->delete($umkm->file_sertifikat);
            $validated['file_sertifikat'] = $request->file('file_sertifikat')->store('umkm/sertifikat', 'public');
        }

        if (!$validated['sertifikat_halal']) {
            if ($umkm->foto) Storage::disk('public')->delete($umkm->foto);
            if ($umkm->file_sertifikat) Storage::disk('public')->delete($umkm->file_sertifikat);
            $validated['foto'] = null;
            $validated['file_sertifikat'] = null;
        }

        $umkm->update($validated);
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil diperbarui.');
    }

    public function destroy(Umkm $umkm)
    {
        if ($umkm->foto) Storage::disk('public')->delete($umkm->foto);
        if ($umkm->file_sertifikat) Storage::disk('public')->delete($umkm->file_sertifikat);

        $umkm->delete();
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
