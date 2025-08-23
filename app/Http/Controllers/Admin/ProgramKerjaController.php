<?php
namespace App\Http\Controllers\Admin;
use App\Models\ProgramKerja;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProgramKerjaController extends Controller
{
    private $bidangOptions = [
        'Pengurus Harian', 'Bidang Ziswaf dan CSR', 'Bidang Penelitian dan Pengembangan Ekonomi Syariah',
        'Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif', 'Bidang Multimedia dan Kominfo',
        'Bidang Sinergi Antar Lembaga dan Komunitas', 'Bidang Kaderisasi', 'Bidang Pendidikan dan Pelatihan'
    ];

    public function index()
    {
        $programs = ProgramKerja::latest()->paginate(10);
        return view('admin.program-kerja.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program-kerja.create', ['bidangOptions' => $this->bidangOptions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'komite_bidang' => ['required', Rule::in($this->bidangOptions)],
            'program_kerja' => 'required|string',
            'tujuan_program' => 'required|string',
        ]);
        ProgramKerja::create($validated);
        return redirect()->route('admin.program-kerja.index')->with('success', 'Program kerja berhasil ditambahkan.');
    }

    public function edit(ProgramKerja $program_kerja)
    {
        return view('admin.program-kerja.edit', [
            'program' => $program_kerja,
            'bidangOptions' => $this->bidangOptions
        ]);
    }

    public function update(Request $request, ProgramKerja $program_kerja)
    {
        $validated = $request->validate([
            'komite_bidang' => ['required', Rule::in($this->bidangOptions)],
            'program_kerja' => 'required|string',
            'tujuan_program' => 'required|string',
        ]);
        $program_kerja->update($validated);
        return redirect()->route('admin.program-kerja.index')->with('success', 'Program kerja berhasil diperbarui.');
    }

    public function destroy(ProgramKerja $program_kerja)
    {
        $program_kerja->delete();
        return redirect()->route('admin.program-kerja.index')->with('success', 'Program kerja berhasil dihapus.');
    }
}
