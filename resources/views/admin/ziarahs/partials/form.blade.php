<div class="space-y-6">
    {{-- Input Nama Lokasi --}}
    <div>
        <label for="nama_lokasi" class="block text-sm font-medium text-gray-700">Nama Lokasi Ziarah</label>
        <div class="mt-1">
            <input type="text" name="nama_lokasi" id="nama_lokasi"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                value="{{ old('nama_lokasi', $ziarah->nama_lokasi ?? '') }}" required>
        </div>
    </div>

    {{-- Input Link Google Maps --}}
    <div>
        <label for="google_maps_link" class="block text-sm font-medium text-gray-700">Link Semat (Embed) Google
            Maps</label>
        <div class="mt-1">
            <input type="url" name="google_maps_link" id="google_maps_link"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                value="{{ old('google_maps_link', $ziarah->google_maps_link ?? '') }}" required
                placeholder="https://www.google.com/maps/embed?pb=!1m18!...">
        </div>
        <p class="mt-2 text-xs text-gray-500">
            Buka Google Maps > Cari Lokasi > Share > Embed a map > Salin HANYA URL di dalam atribut `src="..."`.
        </p>
    </div>

    {{-- Input Deskripsi --}}
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <div class="mt-1">
            <textarea id="deskripsi" name="deskripsi" rows="5"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('deskripsi', $ziarah->deskripsi ?? '') }}</textarea>
        </div>
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.ziarahs.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    </div>
</div>
