@extends('layouts.admin')
@section('title', 'Edit Struktur Organisasi')
@section('content')
    <form method="POST" action="{{ route('admin.struktur-organisasi.update') }}">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Halaman Struktur Organisasi</h3><button
                        type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan
                        Perubahan</button>
                </div>
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
                <div class="mt-6 space-y-6 border-t pt-6">
                    <div><label for="dewan_pembina" class="block text-sm font-medium text-gray-700">A. Dewan Pembina</label>
                        <textarea id="dewan_pembina" name="dewan_pembina" rows="8" class="mt-1 block w-full bg-gray-50 border ...">{{ old('dewan_pembina', $struktur->dewan_pembina) }}</textarea>
                    </div>
                    <div><label for="dewan_pakar" class="block text-sm font-medium text-gray-700">B. Dewan Pakar</label>
                        <textarea id="dewan_pakar" name="dewan_pakar" rows="8" class="mt-1 block w-full bg-gray-50 border ...">{{ old('dewan_pakar', $struktur->dewan_pakar) }}</textarea>
                    </div>
                    <div><label for="badan_pengurus_harian" class="block text-sm font-medium text-gray-700">C. Badan
                            Pengurus Harian</label>
                        <textarea id="badan_pengurus_harian" name="badan_pengurus_harian" rows="8"
                            class="mt-1 block w-full bg-gray-50 border ...">{{ old('badan_pengurus_harian', $struktur->badan_pengurus_harian) }}</textarea>
                    </div>
                    <div><label for="bidang_bidang" class="block text-sm font-medium text-gray-700">D. Bidang-bidang</label>
                        <textarea id="bidang_bidang" name="bidang_bidang" rows="12" class="mt-1 block w-full bg-gray-50 border ...">{{ old('bidang_bidang', $struktur->bidang_bidang) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
