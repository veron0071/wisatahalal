<div class="space-y-6">
    {{-- Input Nama Fasilitas --}}
    <div>
        <label for="nama_fasilitas" class="block text-sm font-medium text-gray-700">Nama Fasilitas</label>
        <div class="mt-1">
            <input type="text" name="nama_fasilitas" id="nama_fasilitas"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nama_fasilitas') border-red-500 @enderror"
                value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas ?? '') }}" required>
        </div>
        @error('nama_fasilitas')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Lokasi --}}
    <div>
        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
        <div class="mt-1">
            <input type="text" name="lokasi" id="lokasi"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('lokasi') border-red-500 @enderror"
                value="{{ old('lokasi', $fasilitas->lokasi ?? '') }}" required>
        </div>
        @error('lokasi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Deskripsi --}}
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <div class="mt-1">
            <textarea id="deskripsi" name="deskripsi" rows="5"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $fasilitas->deskripsi ?? '') }}</textarea>
        </div>
        @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Foto --}}
    <div>
        <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
        <div class="mt-1">
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none
                          file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold
                          file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                id="foto" name="foto" type="file">
            <p class="mt-1 text-xs text-gray-500">Maksimal ukuran file: 2MB</p>
        </div>
        @error('foto')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @if (isset($fasilitas) && $fasilitas->foto)
            <div class="mt-4">
                <p class="text-sm text-gray-500">Foto saat ini:</p>
                <img src="{{ asset('storage/' . $fasilitas->foto) }}" alt="{{ $fasilitas->nama_fasilitas }}"
                    class="mt-2 h-32 w-32 object-cover rounded-md">
            </div>
        @endif
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.fasilitas.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
