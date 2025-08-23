<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoadmapController extends Controller
{
    public function edit()
    {
        $roadmap = Roadmap::firstOrFail();
        return view('admin.roadmap.edit', compact('roadmap'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'gambar_roadmap' => 'nullable|image|max:2048',
            'tahap1_tahun' => 'required|string|max:255',
            'tahap1_deskripsi' => 'required|string',
            'tahap2_tahun' => 'required|string|max:255',
            'tahap2_deskripsi' => 'required|string',
            'tahap3_tahun' => 'required|string|max:255',
            'tahap3_deskripsi' => 'required|string',
        ]);

        $roadmap = Roadmap::firstOrFail();

        if ($request->hasFile('gambar_roadmap')) {
            if ($roadmap->gambar_roadmap) {
                Storage::disk('public')->delete($roadmap->gambar_roadmap);
            }
            $path = $request->file('gambar_roadmap')->store('roadmap', 'public');
            $validated['gambar_roadmap'] = $path;
        }

        $roadmap->update($validated);
        return redirect()->route('admin.roadmap.edit')->with('success', 'Roadmap Organisasi berhasil diperbarui.');
    }
}
