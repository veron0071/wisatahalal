@extends('layouts.admin')
@section('title', 'Edit Link Sertifikasi Halal')

@section('content')
    <form method="POST" action="{{ route('admin.sertifikasi-halal.update') }}">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Link Halaman Sertifikasi Halal</h3>
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan
                        Perubahan</button>
                </div>
                @if (session('success'))
                    <div class="mt-4 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.06 0l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg></div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mt-6 border-t pt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="alur_sertifikasi_url" class="block text-sm font-medium text-gray-700">1. Alur
                            Sertifikasi Halal</label>
                        <input type="url" name="alur_sertifikasi_url" id="alur_sertifikasi_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{ old('alur_sertifikasi_url', $links->alur_sertifikasi_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                    <div>
                        <label for="persyaratan_url" class="block text-sm font-medium text-gray-700">2. Persyaratan</label>
                        <input type="url" name="persyaratan_url" id="persyaratan_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{ old('persyaratan_url', $links->persyaratan_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                    <div>
                        <label for="ptps_sihalal_url" class="block text-sm font-medium text-gray-700">3. PTPS
                            SIHALAL</label>
                        <input type="url" name="ptps_sihalal_url" id="ptps_sihalal_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{ old('ptps_sihalal_url', $links->ptps_sihalal_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                    <div>
                        <label for="pencarian_produk_url" class="block text-sm font-medium text-gray-700">4. Pencarian
                            Produk Halal</label>
                        <input type="url" name="pencarian_produk_url" id="pencarian_produk_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{ old('pencarian_produk_url', $links->pencarian_produk_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                    <div>
                        <label for="modul_self_declare_url" class="block text-sm font-medium text-gray-700">5. Modul
                            Sertifikasi Self Declare</label>
                        <input type="url" name="modul_self_declare_url" id="modul_self_declare_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{ old('modul_self_declare_url', $links->modul_self_declare_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                    <div>
                        <label for="modul_reguler_url" class="block text-sm font-medium text-gray-700">6. Modul Sertifikasi
                            Reguler</label>
                        <input type="url" name="modul_reguler_url" id="modul_reguler_url"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            required placeholder="https://www.example.com"
                            value="{{ old('modul_reguler_url', $links->modul_reguler_url) }}" required
                            placeholder="https://www.example.com">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
