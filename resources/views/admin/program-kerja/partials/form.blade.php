<div class="space-y-6">
    <div>
        <label for="komite_bidang" class="block text-sm font-medium text-gray-700">Komite Bidang</label>
        <select id="komite_bidang" name="komite_bidang"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            <option value="" disabled selected>-- Pilih Bidang --</option>
            @foreach ($bidangOptions as $bidang)
                <option value="{{ $bidang }}"
                    {{ old('komite_bidang', $program->komite_bidang ?? '') == $bidang ? 'selected' : '' }}>
                    {{ $bidang }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="program_kerja" class="block text-sm font-medium text-gray-700">Program Kerja</label>
        <textarea id="program_kerja" name="program_kerja" rows="3"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('program_kerja', $program->program_kerja ?? '') }}</textarea>
    </div>
    <div>
        <label for="tujuan_program" class="block text-sm font-medium text-gray-700">Tujuan Program</label>
        <textarea id="tujuan_program" name="tujuan_program" rows="5"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('tujuan_program', $program->tujuan_program ?? '') }}</textarea>
    </div>
</div>
<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.program-kerja.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    </div>
</div>
