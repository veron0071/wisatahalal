<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            Formulir Publikasi
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Lengkapi data publikasi di bawah ini.
        </p>

        <div class="mt-6 border-t border-gray-200 pt-6">
            <div class="space-y-6">
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <div class="mt-1">
                        <select id="kategori" name="kategori" required
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoriOptions as $option)
                                <option value="{{ $option }}"
                                    {{ old('kategori', $publikasi->kategori ?? '') == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama / Judul Publikasi</label>
                    <div class="mt-1">
                        <input type="text" name="nama" id="nama"
                            value="{{ old('nama', $publikasi->nama ?? '') }}" required
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                    <div class="mt-1">
                        <input name="file" id="file" type="file" {{ isset($publikasi) ? '' : 'required' }}
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-1 text-xs text-gray-500">PDF, DOC, PPT, JPG, PNG (Maks. 10MB). Kosongkan jika tidak
                            ingin mengubah file.</p>
                    </div>
                    @if (isset($publikasi) && $publikasi->file)
                        <div class="mt-4">
                            <p class="text-sm text-gray-500">File saat ini:
                                <a href="{{ asset('storage/' . $publikasi->file) }}" target="_blank"
                                    class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Lihat/Unduh File
                                </a>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-8 pt-5 border-t border-gray-200">
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.publikasi.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
            </div>
        </div>

    </div>
</div>
