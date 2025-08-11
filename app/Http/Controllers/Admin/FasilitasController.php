<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Menampilkan halaman daftar semua data fasilitas.
     */
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Menampilkan form untuk membuat data fasilitas baru.
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Menyimpan data fasilitas yang baru dibuat ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('foto')) {
        // Simpan foto ke storage/app/public/ulama_fotos dan simpan path-nya
        $validated['foto'] = $request->file('foto')->store('fasilitas_fotos', 'public');
        }
        // Buat record baru di database
        Fasilitas::create($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.fasilitas.index')->with('success', 'Data Fasilitas berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data fasilitas yang sudah ada.
     */
    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Memperbarui data fasilitas yang ada di database.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($fasilitas->foto) {
                Storage::disk('public')->delete($fasilitas->foto);
            }
            // Simpan foto baru dan perbarui path-nya
            $validated['foto'] = $request->file('foto')->store('ulama_fotos', 'public');
        }
        // Perbarui record di database
        $fasilitas->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.fasilitas.index')->with('success', 'Data Fasilitas berhasil diperbarui.');
    }

    /**
     * Menghapus data fasilitas dari database.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        // Hapus record dari database
        $fasilitas->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.fasilitas.index')->with('success', 'Data Fasilitas berhasil dihapus.');
    }
}
