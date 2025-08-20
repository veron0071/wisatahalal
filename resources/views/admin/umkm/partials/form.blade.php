@php
    $hasSertifikat = old('sertifikat_halal', $umkm->sertifikat_halal ?? false);
@endphp

<div x-data="{ hasSertifikat: {{ $hasSertifikat ? 'true' : 'false' }} }" class="space-y-6">

    {{-- Input Nama Usaha, Pemilik, Lokasi --}}
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        <div>
            <label for="nama_usaha" class="block text-sm font-medium text-gray-700">Nama Usaha</label>
            <input type="text" name="nama_usaha" id="nama_usaha"
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
                value="{{ old('nama_usaha', $umkm->nama_usaha ?? '') }}" required>
        </div>
        <div>
            <label for="nama_pemilik" class="block text-sm font-medium text-gray-700">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" id="nama_pemilik"
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
                value="{{ old('nama_pemilik', $umkm->nama_pemilik ?? '') }}" required>
        </div>
    </div>
    <div>
        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
        <input type="text" name="lokasi" id="lokasi"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
            value="{{ old('lokasi', $umkm->lokasi ?? '') }}" required>
    </div>
    <div>
        <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700">Deskripsi Produk</label>
        <textarea id="deskripsi_produk" name="deskripsi_produk" rows="5"
            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('deskripsi_produk', $umkm->deskripsi_produk ?? '') }}</textarea>
    </div>

    <hr>

    {{-- Checkbox Sertifikat Halal (Trigger) --}}
    <div class="relative flex items-start">
        <div class="flex h-5 items-center">
            <input id="sertifikat_halal" name="sertifikat_halal" type="checkbox" value="1" x-model="hasSertifikat"
                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
        </div>
        <div class="ml-3 text-sm">
            <label for="sertifikat_halal" class="font-medium text-gray-700">Memiliki Sertifikasi Halal</label>
            <p class="text-gray-500">Centang jika UMKM ini memiliki foto produk dan file sertifikat halal.</p>
        </div>
    </div>

    {{-- Input Kondisional yang akan muncul/hilang --}}
    <div x-show="hasSertifikat" x-transition class="space-y-6 border-l-4 border-indigo-500 pl-6">
        <div>
            <label for="foto" class="block text-sm font-medium text-gray-700">Foto Produk</label>
            <div class="mt-1">
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                    id="foto" name="foto" type="file">
                {{-- TULISAN MAKS 2MB UNTUK FOTO --}}
                <p class="mt-1 text-xs text-gray-500">Maksimal ukuran file: 2MB</p>
            </div>
            @if (isset($umkm) && $umkm->foto)
                <div class="mt-2">
                    <p class="text-sm text-gray-500">Foto saat ini:</p><img src="{{ asset('storage/' . $umkm->foto) }}"
                        class="mt-1 h-24 w-24 object-cover rounded-md">
                </div>
            @endif
            @error('foto')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="file_sertifikat" class="block text-sm font-medium text-gray-700">File Sertifikat Halal
                (PDF/Word)</label>
            <div class="mt-1">
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                    id="file_sertifikat" name="file_sertifikat" type="file">
                {{-- TULISAN MAKS 2MB UNTUK FILE SERTIFIKAT --}}
                <p class="mt-1 text-xs text-gray-500">Maksimal ukuran file: 2MB</p>
            </div>
            @if (isset($umkm) && $umkm->file_sertifikat)
                <div class="mt-2">
                    <p class="text-sm text-gray-500">File saat ini: <a
                            href="{{ asset('storage/' . $umkm->file_sertifikat) }}" target="_blank"
                            class="font-medium text-indigo-600">Lihat/Unduh</a></p>
                </div>
            @endif
            @error('file_sertifikat')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.umkm.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
    </div>
</div>
