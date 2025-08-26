<?php
namespace App\Http\Controllers\Admin;
use App\Models\GisPesantren;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GisPesantrenController extends Controller
{
    public function index()
    {
        $fotos = GisPesantren::latest()->paginate(12);
        return view('admin.gis-pesantren.index', compact('fotos'));
    }

    public function create()
    {
        return view('admin.gis-pesantren.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('foto')->store('gis-pesantren', 'public');
        $validated['foto'] = $path;

        GisPesantren::create($validated);
        return redirect()->route('admin.gis-pesantren.index')->with('success', 'Foto GIS Pesantren berhasil diunggah.');
    }

    public function edit(GisPesantren $gis_pesantren)
    {
        return view('admin.gis-pesantren.edit', ['foto' => $gis_pesantren]);
    }

    public function update(Request $request, GisPesantren $gis_pesantren)
    {
        $validated = $request->validate([
            'keterangan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($gis_pesantren->foto) Storage::disk('public')->delete($gis_pesantren->foto);
            $path = $request->file('foto')->store('gis-pesantren', 'public');
            $validated['foto'] = $path;
        }

        $gis_pesantren->update($validated);
        return redirect()->route('admin.gis-pesantren.index')->with('success', 'Data foto berhasil diperbarui.');
    }

    public function show(GisPesantren $gis_pesantren)
    {
        return view('admin.gis-pesantren.show', ['foto' => $gis_pesantren]);
    }

    public function destroy(GisPesantren $gis_pesantren)
    {
        if ($gis_pesantren->foto) Storage::disk('public')->delete($gis_pesantren->foto);
        $gis_pesantren->delete();
        return redirect()->route('admin.gis-pesantren.index')->with('success', 'Foto berhasil dihapus.');
    }
}
