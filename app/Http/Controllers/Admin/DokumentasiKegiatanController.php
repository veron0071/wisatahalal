<?php
namespace App\Http\Controllers\Admin;
use App\Models\DokumentasiKegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DokumentasiKegiatanController extends Controller
{
    public function index()
    {
        $items = DokumentasiKegiatan::latest()->paginate(12);
        return view('admin.dokumentasi-kegiatan.index', compact('items'));
    }

    public function create()
    {
        return view('admin.dokumentasi-kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'tipe' => ['required', Rule::in(['foto', 'video'])],
            'foto' => 'required_if:tipe,foto|nullable|image|max:2048',
            'video_url' => 'required_if:tipe,video|nullable|url',
        ]);

        $path = null;
        if ($request->input('tipe') === 'foto' && $request->hasFile('foto')) {
            $path = $request->file('foto')->store('dokumentasi', 'public');
        } elseif ($request->input('tipe') === 'video') {
            $path = $request->input('video_url');
        }

        DokumentasiKegiatan::create([
            'keterangan' => $validated['keterangan'],
            'tipe' => $validated['tipe'],
            'path' => $path,
        ]);

        return redirect()->route('admin.dokumentasi-kegiatan.index')->with('success', 'Dokumentasi berhasil ditambahkan.');
    }

    public function edit(DokumentasiKegiatan $dokumentasi_kegiatan)
    {
        return view('admin.dokumentasi-kegiatan.edit', ['item' => $dokumentasi_kegiatan]);
    }

    public function update(Request $request, DokumentasiKegiatan $dokumentasi_kegiatan)
    {
        // Validasi disederhanakan karena tipe tidak bisa diubah
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
            'video_url' => 'nullable|url',
        ]);

        $path = $dokumentasi_kegiatan->path; // Ambil path lama

        if ($dokumentasi_kegiatan->tipe === 'foto' && $request->hasFile('foto')) {
            if ($dokumentasi_kegiatan->path) Storage::disk('public')->delete($dokumentasi_kegiatan->path);
            $path = $request->file('foto')->store('dokumentasi', 'public');
        } elseif ($dokumentasi_kegiatan->tipe === 'video') {
            $path = $request->input('video_url');
        }

        $dokumentasi_kegiatan->update([
            'keterangan' => $validated['keterangan'],
            'path' => $path,
        ]);

        return redirect()->route('admin.dokumentasi-kegiatan.index')->with('success', 'Dokumentasi berhasil diperbarui.');
    }

    public function destroy(DokumentasiKegiatan $dokumentasi_kegiatan)
    {
        // Hapus file foto jika tipenya foto
        if ($dokumentasi_kegiatan->tipe === 'foto' && $dokumentasi_kegiatan->path) {
            Storage::disk('public')->delete($dokumentasi_kegiatan->path);
        }
        $dokumentasi_kegiatan->delete();
        return redirect()->route('admin.dokumentasi-kegiatan.index')->with('success', 'Dokumentasi berhasil dihapus.');
    }
}
