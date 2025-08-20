<div class="space-y-6">
    {{-- Input Nama Stakeholder --}}
    <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Stakeholder</label>
        <div class="mt-1">
            <input type="text" name="nama" id="nama"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nama') border-red-500 @enderror"
                value="{{ old('nama', $stakeholder->nama ?? '') }}" required>
        </div>
        @error('nama')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Jenis --}}
    <div>
        <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
        <div class="mt-1">
            <input type="text" name="jenis" id="jenis"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('jenis') border-red-500 @enderror"
                value="{{ old('jenis', $stakeholder->jenis ?? '') }}" required>
            <p class="mt-2 text-xs text-gray-500">Contoh: Pemerintah, Pesantren, UMKM, Akademisi, Komunitas</p>
        </div>
        @error('jenis')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Input Peran --}}
    <div>
        <label for="peran" class="block text-sm font-medium text-gray-700">Peran</label>
        <div class="mt-1">
            <textarea id="peran" name="peran" rows="5"
                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('peran') border-red-500 @enderror">{{ old('peran', $stakeholder->peran ?? '') }}</textarea>
        </div>
        @error('peran')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 pt-5 border-t border-gray-200">
    <div class="flex justify-end gap-3">
        <a href="{{ route('admin.stakeholders.index') }}"
            class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Batal</a>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
    </div>
</div>
