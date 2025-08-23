@extends('layouts.admin')
@section('title', 'Edit Profil Lembaga')

@section('content')
    {{-- Form ini akan mengirim data ke method 'update' di ProfilLembagaController --}}
    <form method="POST" action="{{ route('admin.profil-lembaga.update') }}">
        @csrf
        @method('PATCH')

        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                {{-- Bagian Header Form --}}
                <div class="flex justify-between items-center pb-5 border-b border-gray-200">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Halaman Profil Lembaga</h3>
                        <p class="mt-1 text-sm text-gray-500">Ubah konten yang akan tampil di halaman publik "Tentang Kami".
                        </p>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>

                {{-- Notifikasi Sukses --}}
                @if (session('success'))
                    <div class="mt-4 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
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

                {{-- Bagian Isian Form --}}
                <div class="mt-6 space-y-6">
                    <div>
                        <label for="pendahuluan" class="block text-sm font-medium text-gray-700">Pendahuluan / Selayang
                            Pandang</label>
                        <textarea id="pendahuluan" name="pendahuluan" rows="8"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('pendahuluan', $profil->pendahuluan) }}</textarea>
                    </div>
                    <div>
                        <label for="tujuan_manfaat" class="block text-sm font-medium text-gray-700">Tujuan dan
                            Manfaat</label>
                        <textarea id="tujuan_manfaat" name="tujuan_manfaat" rows="8"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('tujuan_manfaat', $profil->tujuan_manfaat) }}</textarea>
                        <p class="mt-1 text-xs text-gray-500">Tips: Buat baris baru untuk setiap poin agar tampil sebagai
                            daftar.</p>
                    </div>
                    <div>
                        <label for="target" class="block text-sm font-medium text-gray-700">Target</label>
                        <textarea id="target" name="target" rows="5"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('target', $profil->target) }}</textarea>
                    </div>
                    <div>
                        <label for="legal_formal" class="block text-sm font-medium text-gray-700">Legal Formal</label>
                        <textarea id="legal_formal" name="legal_formal" rows="8"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('legal_formal', $profil->legal_formal) }}</textarea>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
