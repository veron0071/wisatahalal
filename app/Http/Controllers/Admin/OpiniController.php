<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpiniController extends Controller
{
    public function index()
    {
        $opinis = Opini::latest()->paginate(10);
        return view('admin.opini.index', compact('opinis'));
    }

    public function create()
    {
        return view('admin.opini.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('opini/fotos', 'public');
        }
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('opini/files', 'public');
        }

        Opini::create($validated);
        return redirect()->route('admin.opini.index')->with('success', 'Opini baru berhasil dibuat.');
    }

    public function edit(Opini $opini)
    {
        return view('admin.opini.edit', compact('opini'));
    }

    public function update(Request $request, Opini $opini)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($request->hasFile('foto')) {
            if ($opini->foto) Storage::disk('public')->delete($opini->foto);
            $validated['foto'] = $request->file('foto')->store('opini/fotos', 'public');
        }
        if ($request->hasFile('file')) {
            if ($opini->file) Storage::disk('public')->delete($opini->file);
            $validated['file'] = $request->file('file')->store('opini/files', 'public');
        }

        $opini->update($validated);
        return redirect()->route('admin.opini.index')->with('success', 'Opini berhasil diperbarui.');
    }

    public function destroy(Opini $opini)
    {
        if ($opini->foto) Storage::disk('public')->delete($opini->foto);
        if ($opini->file) Storage::disk('public')->delete($opini->file);
        $opini->delete();
        return redirect()->back()->with('success', 'Opini berhasil dihapus.');
    }
}
