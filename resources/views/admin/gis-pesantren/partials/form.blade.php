<div class="space-y-6">
    <div>
        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan Foto</label>
        <div class="mt-1">
            <input type="text" name="keterangan" id="keterangan"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                value="{{ old('keterangan', $foto->keterangan ?? '') }}" required>
        </div>
    </div>
    <div>
        <label for="foto" class="block text-sm font-medium text-gray-700">Pilih File Foto</label>
        <div class="mt-1">
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                id="foto" name="foto" type="file" {{ isset($foto) ? '' : 'required' }}>
        </div>
        @if (isset($foto) && $foto->foto)
            <div class="mt-4">
                <p class="text-sm text-gray-500">Foto saat ini:</p>
                <img src="{{ asset('storage/' . $foto->foto) }}" alt="{{ $foto->keterangan }}"
                    class="mt-2 h-32 w-auto rounded-md">
            </div>
        @endif
    </div>
</div>
<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.gis-pesantren.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
