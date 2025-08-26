<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SertifikasiHalalLink;
use Illuminate\Http\Request;

class SertifikasiHalalController extends Controller
{
    public function edit()
    {
        $links = SertifikasiHalalLink::firstOrNew([]);

        return view('admin.sertifikasi-halal.edit', compact('links'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'alur_sertifikasi_url' => 'required|url',
            'persyaratan_url' => 'required|url',
            'ptps_sihalal_url' => 'required|url',
            'pencarian_produk_url' => 'required|url',
            'modul_self_declare_url' => 'required|url',
            'modul_reguler_url' => 'required|url',
        ]);

        SertifikasiHalalLink::updateOrCreate(['id' => 1], $validated);

        return redirect()->route('admin.sertifikasi-halal.edit')->with('success', 'Link Sertifikasi Halal berhasil disimpan.');
    }
}
