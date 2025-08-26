<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KomunitasUmkmHalal;
use Illuminate\Http\Request;

class KomunitasUmkmHalalController extends Controller
{
    public function edit()
    {
        $link = KomunitasUmkmHalal::firstOrCreate(
            ['id' => 1],
            ['whatsapp_link' => '']
        );

        return view('admin.komunitas-umkm-halal.edit', compact('link'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'whatsapp_link' => 'required|url',
        ]);

        $link = KomunitasUmkmHalal::first();

        $link->update([
            'whatsapp_link' => $request->whatsapp_link,
        ]);

        return redirect()->back()->with('success', 'Link Komunitas UMKM Halal berhasil diperbarui!');
    }
}
