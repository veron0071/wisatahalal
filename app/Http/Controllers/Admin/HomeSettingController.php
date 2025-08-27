<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSettingController extends Controller
{
    public function edit()
    {
        $setting = HomeSetting::firstOrCreate(
            ['id' => 1], // Kondisi untuk mencari
            [            // Nilai yang digunakan jika data baru dibuat
                'judul' => 'Judul Halaman Utama',
                'sub_judul' => 'Ini adalah sub judul default, silakan diubah.',
                'link' => '#',
            ]
        );
        return view('admin.home-setting.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = HomeSetting::find(1);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string',
            'link' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($setting->foto && Storage::disk('public')->exists($setting->foto)) {
                Storage::disk('public')->delete($setting->foto);
            }
            $validated['foto'] = $request->file('foto')->store('home', 'public');
        }

        $setting->update($validated);

        return redirect()->back()->with('success', 'Pengaturan Halaman Home berhasil diperbarui!');
    }
}
