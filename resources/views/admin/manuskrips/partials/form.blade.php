<div class="space-y-6">
    {{-- Input Judul --}}
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Manuskrip</label>
        <div class="mt-1">
            <input type="text" name="judul" id="judul"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('judul') border-red-500 @enderror"
                value="{{ old('judul', $manuskrip->judul ?? '') }}" required>
        </div>
        @error('judul')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Deskripsi --}}
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <div class="mt-1">
            <textarea id="deskripsi" name="deskripsi" rows="5"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $manuskrip->deskripsi ?? '') }}</textarea>
        </div>
        @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input File --}}
    <div>
        <label for="file_url" class="block text-sm font-medium text-gray-700">Upload File (PDF/Word)</label>
        <div class="mt-1">
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none
                          file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold
                          file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                id="file_url" name="file_url" type="file">
        </div>
        <p class="mt-2 text-xs text-gray-500">Kosongkan jika tidak ingin mengubah file yang sudah ada.</p>
        @error('file_url')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @if (isset($manuskrip) && $manuskrip->file_url)
            <div class="mt-4">
                <p class="text-sm text-gray-500">File saat ini:
                    <a href="{{ asset('storage/' . $manuskrip->file_url) }}" target="_blank"
                        class="font-medium text-indigo-600 hover:text-indigo-500">
                        Lihat/Unduh File
                    </a>
                </p>
            </div>
        @endif
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.manuskrips.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
