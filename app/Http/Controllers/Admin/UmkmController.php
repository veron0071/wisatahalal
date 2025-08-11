<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Menampilkan halaman daftar semua data UMKM.
     */
    public function index()
    {
        $umkms = Umkm::latest()->paginate(10);
        return view('admin.umkm.index', compact('umkms'));
    }

    /**
     * Menampilkan form untuk membuat data UMKM baru.
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Menyimpan data UMKM yang baru dibuat ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'nama_pemilik' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'sertifikat_halal' => 'nullable|boolean',
        ]);

        // Menangani nilai dari checkbox. Jika checkbox dicentang, request akan memiliki 'sertifikat_halal'.
        // Jika tidak, maka tidak akan ada. Kita set nilainya secara eksplisit.
        $validated['sertifikat_halal'] = $request->has('sertifikat_halal');

        // Buat record baru di database
        Umkm::create($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data UMKM yang sudah ada.
     */
    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    /**
     * Memperbarui data UMKM yang ada di database.
     */
    public function update(Request $request, Umkm $umkm)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'nama_pemilik' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'sertifikat_halal' => 'nullable|boolean',
        ]);

        // Menangani nilai dari checkbox
        $validated['sertifikat_halal'] = $request->has('sertifikat_halal');

        // Perbarui record di database
        $umkm->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil diperbarui.');
    }

    /**
     * Menghapus data UMKM dari database.
     */
    public function destroy(Umkm $umkm)
    {
        // Hapus record dari database
        $umkm->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
