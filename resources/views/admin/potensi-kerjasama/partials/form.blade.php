<div class="space-y-6">
    <div>
        <label for="kategori_mitra" class="block text-sm font-medium text-gray-700">Kategori Mitra</label>
        <input type="text" name="kategori_mitra" id="kategori_mitra"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
            value="{{ old('kategori_mitra', $item->kategori_mitra ?? '') }}" required>
    </div>
    <div>
        <label for="mitra_potensial" class="block text-sm font-medium text-gray-700">Mitra Potensial</label>
        <textarea id="mitra_potensial" name="mitra_potensial" rows="4"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3" required>{{ old('mitra_potensial', $item->mitra_potensial ?? '') }}</textarea>
    </div>
    <div>
        <label for="isu_need_utama" class="block text-sm font-medium text-gray-700">Isu/Need Utama</label>
        <textarea id="isu_need_utama" name="isu_need_utama" rows="4"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3" required>{{ old('isu_need_utama', $item->isu_need_utama ?? '') }}</textarea>
    </div>
    <div>
        <label for="nilai_tambah_pd_mes" class="block text-sm font-medium text-gray-700">Nilai Tambah PD MES</label>
        <textarea id="nilai_tambah_pd_mes" name="nilai_tambah_pd_mes" rows="4"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3" required>{{ old('nilai_tambah_pd_mes', $item->nilai_tambah_pd_mes ?? '') }}</textarea>
    </div>
</div>
<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.potensi-kerjasama.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    </div>
</div>
