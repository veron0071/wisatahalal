<div class="space-y-6">
    {{-- Input Nama Paket Wisata --}}
    <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Paket Wisata</label>
        <div class="mt-1">
            <input type="text" name="nama" id="nama"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nama') border-red-500 @enderror"
                value="{{ old('nama', $paketwisata->nama ?? '') }}" required>
        </div>
        @error('nama')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Harga --}}
    <div>
        <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
        <div class="mt-1">
            <input type="number" name="harga" id="harga" min="0"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('harga') border-red-500 @enderror"
                value="{{ old('harga', $paketwisata->harga ?? '') }}" required placeholder="50000">
            <p class="mt-2 text-xs text-gray-500">Masukkan angka saja, tanpa "Rp" atau titik.</p>
        </div>
        @error('harga')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Fasilitas --}}
    <div>
        <label for="fasilitas" class="block text-sm font-medium text-gray-700">Fasilitas</label>
        <div class="mt-1">
            <textarea id="fasilitas" name="fasilitas" rows="4"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('fasilitas') border-red-500 @enderror">{{ old('fasilitas', $paketwisata->fasilitas ?? '') }}</textarea>
            <p class="mt-2 text-xs text-gray-500">Pisahkan setiap fasilitas dengan koma. Contoh: Transportasi, Makan
                Siang, Tiket Masuk</p>
        </div>
        @error('fasilitas')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Deskripsi --}}
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Paket</label>
        <div class="mt-1">
            <textarea id="deskripsi" name="deskripsi" rows="6"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $paketwisata->deskripsi ?? '') }}</textarea>
        </div>
        @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.paketwisatas.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
