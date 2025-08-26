<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KomunitasInvestorHalal;
use Illuminate\Http\Request;

class KomunitasInvestorHalalController extends Controller
{
    public function edit()
    {
        $link = KomunitasInvestorHalal::firstOrCreate(
            ['id' => 1],
            ['whatsapp_link' => '']
        );

        return view('admin.komunitas-investor-halal.edit', compact('link'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'whatsapp_link' => 'required|url',
        ]);

        $link = KomunitasInvestorHalal::first();

        $link->update([
            'whatsapp_link' => $request->whatsapp_link,
        ]);

        return redirect()->back()->with('success', 'Link Komunitas Investor Halal berhasil diperbarui!');
    }
}
