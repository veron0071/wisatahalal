<div class="space-y-6">
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
        <div class="mt-1">
            <input type="text" name="judul" id="judul" value="{{ old('judul', $opini->judul ?? '') }}" required
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </div>

    <div>
        <label for="isi" class="block text-sm font-medium text-gray-700">Isi Konten</label>
        <div class="mt-1">
            <textarea name="isi" id="isi" rows="15"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('isi', $opini->isi ?? '') }}</textarea>
        </div>
    </div>

    <div>
        <label for="foto" class="block text-sm font-medium text-gray-700">Foto Utama (Banner)</label>
        <div class="mt-1">
            <input name="foto" id="foto" type="file"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            <p class="mt-1 text-xs text-gray-500">Maksimal 2MB. Kosongkan jika tidak ingin mengubah foto.</p>
        </div>
        @if (isset($opini) && $opini->foto)
            <div class="mt-4">
                <p class="text-sm text-gray-500">Foto saat ini:</p>
                <img src="{{ asset('storage/' . $opini->foto) }}" class="mt-2 h-32 w-auto rounded-md border">
            </div>
        @endif
    </div>

    <div>
        <label for="file" class="block text-sm font-medium text-gray-700">File Dokumen (Opsional)</label>
        <div class="mt-1">
            <input name="file" id="file" type="file"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            <p class="mt-1 text-xs text-gray-500">Maksimal 10MB. Kosongkan jika tidak ingin mengubah file.</p>
        </div>
        @if (isset($opini) && $opini->file)
            <p class="mt-2 text-sm">File saat ini: <a href="{{ asset('storage/' . $opini->file) }}" target="_blank"
                    class="font-medium text-indigo-600 hover:text-indigo-500">Unduh/Lihat File</a></p>
        @endif
    </div>
</div>
