<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UlamaController extends Controller
{
    /**
     * Menampilkan halaman daftar semua data ulama.
     * Mengambil data terbaru dan menampilkannya dalam format paginasi.
     */
    public function index()
    {
        $ulamas = Ulama::latest()->paginate(10);
        return view('admin.ulama.index', compact('ulamas'));
    }

    /**
     * Menampilkan form untuk membuat data ulama baru.
     */
    public function create()
    {
    
        return view('admin.ulama.create');
    }

    /**
     * Menyimpan data ulama yang baru dibuat ke dalam database.
     */
   public function store(Request $request)
{
    // Validasi input dari form
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'sejarah' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Cek jika ada file foto yang diunggah
    if ($request->hasFile('foto')) {
        // Simpan foto ke storage/app/public/ulama_fotos dan simpan path-nya
        $validated['foto'] = $request->file('foto')->store('ulama_fotos', 'public');
    }

    // Buat record baru di database
    Ulama::create($validated);

    // Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil ditambahkan.');
}

    /**
     * Menampilkan form untuk mengedit data ulama yang sudah ada.
     */
    public function edit(Ulama $ulama)
    {
        return view('admin.ulama.edit', compact('ulama'));
    }

    /**
     * Memperbarui data ulama yang ada di database.
     */
    public function update(Request $request, Ulama $ulama)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'sejarah' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cek jika ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($ulama->foto) {
                Storage::disk('public')->delete($ulama->foto);
            }
            // Simpan foto baru dan perbarui path-nya
            $validated['foto'] = $request->file('foto')->store('ulama_fotos', 'public');
        }

        // Perbarui record di database
        $ulama->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil diperbarui.');
    }

    /**
     * Menghapus data ulama dari database.
     */
    public function destroy(Ulama $ulama)
    {
        // Hapus foto dari storage jika ada
        if ($ulama->foto) {
            Storage::disk('public')->delete($ulama->foto);
        }
        
        // Hapus record dari database
        $ulama->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.ulama.index')->with('success', 'Data Ulama berhasil dihapus.');
    }
}
