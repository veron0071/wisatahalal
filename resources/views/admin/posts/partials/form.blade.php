<div class="space-y-6">
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Post</label>
        <div class="mt-1">
            <input type="text" name="judul" id="judul"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                value="{{ old('judul', $post->judul ?? '') }}" required>
        </div>
        @error('judul')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
        {{-- PERBAIKAN ADA DI BARIS CLASS DI BAWAH INI --}}
        <select id="kategori" name="kategori"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            required>
            <option value="" disabled {{ old('kategori', $post->kategori ?? '') == '' ? 'selected' : '' }}>--
                Pilih Kategori --</option>
            @foreach ($kategoriOptions as $kategori)
                <option value="{{ $kategori }}"
                    {{ old('kategori', $post->kategori ?? '') == $kategori ? 'selected' : '' }}>
                    {{ $kategori }}
                </option>
            @endforeach
        </select>
        @error('kategori')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="isi" class="block text-sm font-medium text-gray-700">Isi Konten</label>
        <div class="mt-1">
            <textarea id="isi" name="isi" rows="10"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                required>{{ old('isi', $post->isi ?? '') }}</textarea>
        </div>
        @error('isi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="foto" class="block text-sm font-medium text-gray-700">Foto Utama (Banner)</label>
        <div class="mt-1">
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                id="foto" name="foto" type="file">
        </div>
        @if (isset($post) && $post->foto)
            <div class="mt-4">
                <p class="text-sm text-gray-500">Foto saat ini:</p><img src="{{ asset('storage/' . $post->foto) }}"
                    alt="{{ $post->judul }}" class="mt-2 h-40 object-cover rounded-md">
            </div>
        @endif
        @error('foto')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.posts.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    </div>
</div>
