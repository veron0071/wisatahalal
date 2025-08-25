<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KawasanWisataHalal;
use App\Models\DokumentasiKegiatanKawasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KawasanWisataHalalController extends Controller
{
    public function index()
    {
        $kawasans = KawasanWisataHalal::latest()->paginate(10);
        return view('admin.kawasan-wisata-halal.index', compact('kawasans'));
    }

    public function create()
    {
        return view('admin.kawasan-wisata-halal.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sejarah_perkembangan' => 'nullable|string',
            'fasilitas_kondisi' => 'nullable|string',
            'lokasi_gmaps' => 'nullable|url',
            'link_umkm' => 'nullable|url',
            'dokumentasi_files.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov|max:20480'
        ]);

        // 1. Buat entri utama terlebih dahulu
        $kawasan = KawasanWisataHalal::create($validated);

        // 2. Jika ada file, upload dan kaitkan dengan entri yang baru dibuat
        if ($request->hasFile('dokumentasi_files')) {
            foreach ($request->file('dokumentasi_files') as $file) {
                $path = $file->store('kawasan_wisata_halal', 'public');
                $type = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'image';
                $kawasan->dokumentasi()->create(['file_path' => $path, 'file_type' => $type]);
            }
        }

        return redirect()->route('admin.kawasan-wisata-halal.index')->with('success', 'Data Kawasan Wisata Halal berhasil ditambahkan.');
    }

    public function edit(KawasanWisataHalal $kawasan_wisata_halal)
    {
        // Eager load relasi dokumentasi
        $kawasan_wisata_halal->load('dokumentasi');
        return view('admin.kawasan-wisata-halal.edit', ['data' => $kawasan_wisata_halal]);
    }

    public function update(Request $request, KawasanWisataHalal $kawasan_wisata_halal)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sejarah_perkembangan' => 'nullable|string',
            'fasilitas_kondisi' => 'nullable|string',
            'lokasi_gmaps' => 'nullable|url',
            'link_umkm' => 'nullable|url',
            'dokumentasi_files.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov|max:20480'
        ]);

        // 1. Update entri utama
        $kawasan_wisata_halal->update($validated);

        // 2. Tambahkan file baru jika ada
        if ($request->hasFile('dokumentasi_files')) {
            foreach ($request->file('dokumentasi_files') as $file) {
                $path = $file->store('kawasan_wisata_halal', 'public');
                $type = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'image';
                $kawasan_wisata_halal->dokumentasi()->create(['file_path' => $path, 'file_type' => $type]);
            }
        }

        return redirect()->route('admin.kawasan-wisata-halal.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(KawasanWisataHalal $kawasan_wisata_halal)
    {
        // 1. Hapus semua file dokumentasi dari storage
        foreach ($kawasan_wisata_halal->dokumentasi as $doc) {
            Storage::disk('public')->delete($doc->file_path);
        }

        // 2. Hapus data dari database (record dokumentasi akan terhapus otomatis karena 'onDelete cascade')
        $kawasan_wisata_halal->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function destroyDokumentasi(DokumentasiKegiatanKawasan $dokumentasi)
    {
        Storage::disk('public')->delete($dokumentasi->file_path);
        $dokumentasi->delete();
        return redirect()->back()->with('success', 'Dokumentasi berhasil dihapus.');
    }
}
