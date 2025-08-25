<?php
namespace App\Http\Controllers\Admin;
use App\Models\IndustriKeuanganSyariah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustriKeuanganSyariahController extends Controller
{
    public function index()
    {
        $items = IndustriKeuanganSyariah::latest()->paginate(12);
        return view('admin.industri-keuangan-syariah.index', compact('items'));
    }

    public function create()
    {
        return view('admin.industri-keuangan-syariah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|max:2048',
        ]);

        $validated['foto'] = $request->file('foto')->store('industri-keuangan-syariah', 'public');
        IndustriKeuanganSyariah::create($validated);
        return redirect()->route('admin.industri-keuangan-syariah.index')->with('success', 'Foto berhasil diunggah.');
    }

    public function edit(IndustriKeuanganSyariah $industri_keuangan_syariah)
    {
        return view('admin.industri-keuangan-syariah.edit', ['item' => $industri_keuangan_syariah]);
    }

    public function update(Request $request, IndustriKeuanganSyariah $industri_keuangan_syariah)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($industri_keuangan_syariah->foto) Storage::disk('public')->delete($industri_keuangan_syariah->foto);
            $validated['foto'] = $request->file('foto')->store('industri-keuangan-syariah', 'public');
        }

        $industri_keuangan_syariah->update($validated);
        return redirect()->route('admin.industri-keuangan-syariah.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(IndustriKeuanganSyariah $industri_keuangan_syariah)
    {
        if ($industri_keuangan_syariah->foto) Storage::disk('public')->delete($industri_keuangan_syariah->foto);
        $industri_keuangan_syariah->delete();
        return redirect()->route('admin.industri-keuangan-syariah.index')->with('success', 'Foto berhasil dihapus.');
    }
}
