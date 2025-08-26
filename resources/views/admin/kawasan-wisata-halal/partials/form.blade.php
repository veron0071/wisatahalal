<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            Formulir Data Kawasan Wisata Halal
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Lengkapi semua informasi yang dibutuhkan di bawah ini.
        </p>

        <div class="mt-6 border-t border-gray-200 pt-6">
            <div class="space-y-6">
                {{-- Judul --}}
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <div class="mt-1">
                        <input type="text" name="judul" id="judul"
                            value="{{ old('judul', $data->judul ?? '') }}" required
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Contoh: Sejarah Perkembangan Tahun 2024">
                    </div>
                </div>

                {{-- Sejarah Perkembangan --}}
                <div>
                    <label for="sejarah_perkembangan" class="block text-sm font-medium text-gray-700">Sejarah
                        Perkembangan</label>
                    <div class="mt-1">
                        <textarea id="sejarah_perkembangan" name="sejarah_perkembangan" rows="5"
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('sejarah_perkembangan', $data->sejarah_perkembangan ?? '') }}</textarea>
                    </div>
                </div>

                {{-- Fasilitas dan Kondisi --}}
                <div>
                    <label for="fasilitas_kondisi" class="block text-sm font-medium text-gray-700">Fasilitas dan Kondisi
                        Terkini</label>
                    <div class="mt-1">
                        <textarea id="fasilitas_kondisi" name="fasilitas_kondisi" rows="5"
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('fasilitas_kondisi', $data->fasilitas_kondisi ?? '') }}</textarea>
                    </div>
                </div>

                {{-- Link GMaps --}}
                <div>
                    <label for="lokasi_gmaps" class="block text-sm font-medium text-gray-700">Link Google Maps
                        Lokasi</label>
                    <div class="mt-1">
                        <input type="url" name="lokasi_gmaps" id="lokasi_gmaps"
                            value="{{ old('lokasi_gmaps', $data->lokasi_gmaps ?? '') }}"
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="https://maps.app.goo.gl/xxxx">
                    </div>
                </div>

                {{-- Link UMKM --}}
                <div>
                    <label for="link_umkm" class="block text-sm font-medium text-gray-700">Link Formulir Pendataan
                        UMKM</label>
                    <div class="mt-1">
                        <input type="url" name="link_umkm" id="link_umkm"
                            value="{{ old('link_umkm', $data->link_umkm ?? '') }}"
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="https://forms.gle/xxxx">
                    </div>
                </div>

                {{-- Dokumentasi eksisting (hanya di halaman edit) --}}
                @if (isset($data) && $data->dokumentasi->isNotEmpty())
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Dokumentasi Saat Ini</label>
                        <div class="mt-2 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            @foreach ($data->dokumentasi as $doc)
                                <div class="relative group">
                                    @if ($doc->file_type === 'image')
                                        <img src="{{ asset('storage/' . $doc->file_path) }}"
                                            class="h-32 w-full object-cover rounded-md">
                                    @else
                                        <video src="{{ asset('storage/' . $doc->file_path) }}"
                                            class="h-32 w-full object-cover rounded-md" controls></video>
                                    @endif
                                    <div
                                        class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button type="submit" form="delete-doc-{{ $doc->id }}"
                                            class="text-white text-xl p-2 bg-red-600 rounded-full hover:bg-red-700"
                                            title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Upload Dokumentasi Baru --}}
                <div>
                    <label for="dokumentasi_files" class="block text-sm font-medium text-gray-700">
                        {{ isset($data) ? 'Tambah Dokumentasi Baru' : 'Upload Dokumentasi' }} (Bisa pilih banyak file)
                    </label>
                    <div class="mt-1">
                        <input name="dokumentasi_files[]" id="dokumentasi_files" type="file" multiple
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-1 text-xs text-gray-500">Maksimal 20MB per file. Kosongkan jika tidak ingin
                            menambah file baru.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-5 border-t border-gray-200">
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.kawasan-wisata-halal.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>
