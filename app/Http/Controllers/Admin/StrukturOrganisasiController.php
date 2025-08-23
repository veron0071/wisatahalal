<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function edit()
    {
        $struktur = StrukturOrganisasi::firstOrFail();
        return view('admin.struktur-organisasi.edit', compact('struktur'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'dewan_pembina' => 'required|string',
            'dewan_pakar' => 'required|string',
            'badan_pengurus_harian' => 'required|string',
            'bidang_bidang' => 'required|string',
        ]);

        $struktur = StrukturOrganisasi::firstOrFail();
        $struktur->update($validated);

        return redirect()->route('admin.struktur-organisasi.edit')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }
}
