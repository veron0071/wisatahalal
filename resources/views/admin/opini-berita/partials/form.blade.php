<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            Formulir Opini & Berita
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Lengkapi data opini atau berita di bawah ini.
        </p>

        <div class="mt-6 border-t border-gray-200 pt-6">
            <div class="space-y-6">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Opini / Berita</label>
                    <div class="mt-1">
                        <input type="text" name="nama" id="nama"
                            value="{{ old('nama', $opiniBerita->nama ?? '') }}" required
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700">File (PDF/Word)</label>
                    <div class="mt-1">
                        <input name="file" id="file" type="file" {{ isset($opiniBerita) ? '' : 'required' }}
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-1 text-xs text-gray-500">Maks. 10MB. Kosongkan jika tidak ingin mengubah file.</p>
                    </div>
                    @if (isset($opiniBerita) && $opiniBerita->file)
                        <div class="mt-4">
                            <p class="text-sm text-gray-500">File saat ini:
                                <a href="{{ asset('storage/' . $opiniBerita->file) }}" target="_blank"
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
                <a href="{{ route('admin.opini-berita.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
            </div>
        </div>
    </div>
</div>
