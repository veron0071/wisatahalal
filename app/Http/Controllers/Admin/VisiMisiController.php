<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function edit()
    {
        $visiMisi = VisiMisi::firstOrFail();
        return view('admin.visi-misi.edit', compact('visiMisi'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visiMisi = VisiMisi::firstOrFail();
        $visiMisi->update($validated);

        return redirect()->route('admin.visi-misi.edit')->with('success', 'Visi & Misi berhasil diperbarui.');
    }
}
