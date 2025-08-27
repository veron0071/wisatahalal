@extends('layouts.admin')
@section('title', 'Pengaturan Halaman Home')

@section('content')
    <form method="POST" action="{{ route('admin.home-setting.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">

                {{-- Bagian Header dengan Tombol Simpan di Kanan --}}
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Pengaturan Hero Section Home</h3>
                        <p class="mt-1 text-sm text-gray-500">Ubah konten yang akan tampil di halaman utama.</p>
                    </div>
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">
                        Simpan Perubahan
                    </button>
                </div>

                @if (session('success'))
                    <div class="mt-4 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.06 0l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Bagian Form Input --}}
                <div class="mt-6 space-y-6 border-t border-gray-200 pt-6">
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                        <div class="mt-1">
                            <input type="text" name="judul" id="judul" value="{{ old('judul', $setting->judul) }}"
                                required
                                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="sub_judul" class="block text-sm font-medium text-gray-700">Sub Judul</label>
                        <div class="mt-1">
                            <textarea name="sub_judul" id="sub_judul" rows="3"
                                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('sub_judul', $setting->sub_judul) }}</textarea>
                        </div>
                    </div>
                    <div>
                        <label for="link" class="block text-sm font-medium text-gray-700">Link Tombol</label>
                        <div class="mt-1">
                            <input type="text" name="link" id="link" value="{{ old('link', $setting->link) }}"
                                required
                                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Contoh: #tentang-kami atau https://...">
                        </div>
                    </div>
                    <div>
                        <label for="foto" class="block text-sm font-medium text-gray-700">Ganti Foto Background</label>
                        <div class="mt-1">
                            <input name="foto" id="foto" type="file"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Maksimal 2MB. Kosongkan jika tidak ingin mengubah foto.</p>
                        @if ($setting->foto)
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">Foto saat ini:</p>
                                <img src="{{ asset('storage/' . $setting->foto) }}"
                                    class="mt-2 h-32 w-auto rounded-md border">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
