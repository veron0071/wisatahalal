<div class="space-y-6">
    {{-- Input Nama UMKM --}}
    <div>
        <label for="nama_umkm" class="block text-sm font-medium text-gray-700">Nama UMKM</label>
        <div class="mt-1">
            <input type="text" name="nama_umkm" id="nama_umkm"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nama_umkm') border-red-500 @enderror"
                value="{{ old('nama_umkm', $sertifikasi->nama_umkm ?? '') }}" required>
        </div>
        @error('nama_umkm')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Nomor Sertifikat --}}
    <div>
        <label for="nomor_sertifikat" class="block text-sm font-medium text-gray-700">Nomor Sertifikat</label>
        <div class="mt-1">
            <input type="text" name="nomor_sertifikat" id="nomor_sertifikat"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nomor_sertifikat') border-red-500 @enderror"
                value="{{ old('nomor_sertifikat', $sertifikasi->nomor_sertifikat ?? '') }}">
        </div>
        @error('nomor_sertifikat')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Tanggal --}}
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        <div>
            <label for="tanggal_terbit" class="block text-sm font-medium text-gray-700">Tanggal Terbit</label>
            <div class="mt-1">
                <input type="date" name="tanggal_terbit" id="tanggal_terbit"
                    class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('tanggal_terbit') border-red-500 @enderror"
                    value="{{ old('tanggal_terbit', isset($sertifikasi) ? $sertifikasi->tanggal_terbit->format('Y-m-d') : '') }}"
                    required>
            </div>
            @error('tanggal_terbit')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="tanggal_kedaluwarsa" class="block text-sm font-medium text-gray-700">Tanggal Kedaluwarsa</label>
            <div class="mt-1">
                <input type="date" name="tanggal_kedaluwarsa" id="tanggal_kedaluwarsa"
                    class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('tanggal_kedaluwarsa') border-red-500 @enderror"
                    value="{{ old('tanggal_kedaluwarsa', isset($sertifikasi) ? $sertifikasi->tanggal_kedaluwarsa->format('Y-m-d') : '') }}"
                    required>
            </div>
            @error('tanggal_kedaluwarsa')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.sertifikasis.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
