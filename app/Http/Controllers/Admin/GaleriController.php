<?php
namespace App\Http\Controllers\Admin;
use App\Models\Galeri;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $fotos = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('fotos'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('foto')->store('galeri', 'public');
        $validated['foto'] = $path;

        Galeri::create($validated);
        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil diunggah.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($galeri->foto) Storage::disk('public')->delete($galeri->foto);
            $path = $request->file('foto')->store('galeri', 'public');
            $validated['foto'] = $path;
        }

        $galeri->update($validated);
        return redirect()->route('admin.galeri.index')->with('success', 'Data foto berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->foto) Storage::disk('public')->delete($galeri->foto);
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus.');
    }

    public function galeriIndex()
    {
        // Ambil data foto dari database, urutkan dari yang terbaru
        $fotos = Galeri::latest()->paginate(12); // Mengambil 12 foto per halaman

        // Kirim data ke view 'galeri.index'
        return view('galeri.index', compact('fotos'));
    }
}
