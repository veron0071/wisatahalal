<div class="space-y-6">
    {{-- Input Judul Ceramah --}}
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Ceramah</label>
        <div class="mt-1">
            <input type="text" name="judul" id="judul"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('judul') border-red-500 @enderror"
                value="{{ old('judul', $ceramah->judul ?? '') }}" required>
        </div>
        @error('judul')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Nama Pemateri --}}
    <div>
        <label for="pemateri" class="block text-sm font-medium text-gray-700">Nama Pemateri</label>
        <div class="mt-1">
            <input type="text" name="pemateri" id="pemateri"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('pemateri') border-red-500 @enderror"
                value="{{ old('pemateri', $ceramah->pemateri ?? '') }}" required>
        </div>
        @error('pemateri')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input URL Video --}}
    <div>
        <label for="video_url" class="block text-sm font-medium text-gray-700">URL Video (YouTube)</label>
        <div class="mt-1">
            <input type="url" name="video_url" id="video_url"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('video_url') border-red-500 @enderror"
                value="{{ old('video_url', $ceramah->video_url ?? '') }}">
            <p class="mt-2 text-xs text-gray-500">Contoh: https://www.youtube.com/watch?v=xxxxxxxxxxx</p>
        </div>
        @error('video_url')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Deskripsi --}}
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <div class="mt-1">
            <textarea id="deskripsi" name="deskripsi" rows="5"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $ceramah->deskripsi ?? '') }}</textarea>
        </div>
        @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.ceramahs.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
