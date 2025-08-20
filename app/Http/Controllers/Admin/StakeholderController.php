<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Stakeholder;
class StakeholderController extends Controller
{
    public function index()
    {
        // $title = 'Daftar Stakeholder';
        // $items = Stakeholder::all();
        // return view('admin.stakeholders.index', compact('title', 'items'));

        $stakeholders = Stakeholder::latest()->paginate(10);
        return view('admin.stakeholders.index', compact('stakeholders'));
    }
    public function create()
    {
        // $title = 'Tambah Stakeholder';
        // $action = route('admin.stakeholders.store');
        // return view('admin.stakeholders.create', compact('title', 'action'));

        return view('admin.stakeholders.create');
    }
    public function store(Request $request)
    {
        // Stakeholder::create($request->all());
        // return redirect()->route('admin.stakeholders.index')->with('success', 'Data berhasil ditambahkan');

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'peran' => 'nullable|string',
        ]);

        Stakeholder::create($validated);
        return redirect()->route('admin.stakeholders.index')->with('success', 'Stakeholder berhasil ditambahkan.');
    }
    public function show(Stakeholder $stakeholder)
    {
        // $title = 'Detail Stakeholder';
        // return view('admin.stakeholders.show', compact('title', 'stakeholder'));

        return view('admin.stakeholders.show', compact('stakeholder'));
    }
    public function edit(Stakeholder $stakeholder)
    {
        // $title = 'Edit Stakeholder';
        // $action = route('admin.stakeholders.update', $stakeholder);
        // return view('admin.stakeholders.edit', compact('title', 'action', 'stakeholder'));

        return view('admin.stakeholders.edit', compact('stakeholder'));
    }
    public function update(Request $request, Stakeholder $stakeholder)
    {
        // $stakeholder->update($request->all());
        // return redirect()->route('admin.stakeholders.index')->with('success', 'Data berhasil diperbarui');

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'peran' => 'nullable|string',
        ]);

        $stakeholder->update($validated);
        return redirect()->route('admin.stakeholders.index')->with('success', 'Stakeholder berhasil diperbarui.');
    }
    public function destroy(Stakeholder $stakeholder)
    {
        $stakeholder->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
