<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilLembaga;
use Illuminate\Http\Request;

class ProfilLembagaController extends Controller
{
    public function edit()
    {
        // Ambil data pertama (dan satu-satunya) dari tabel
        $profil = ProfilLembaga::firstOrFail();
        return view('admin.profil-lembaga.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'pendahuluan' => 'required|string',
            'tujuan_manfaat' => 'required|string',
            'target' => 'required|string',
            'legal_formal' => 'required|string',
        ]);

        $profil = ProfilLembaga::firstOrFail();
        $profil->update($validated);

        return redirect()->route('admin.profil-lembaga.edit')->with('success', 'Profil Lembaga berhasil diperbarui.');
    }
}
