@extends('layouts.admin')
@section('title', 'Edit Visi & Misi')
@section('content')
    <form method="POST" action="{{ route('admin.visi-misi.update') }}">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Halaman Visi & Misi</h3>
                        <p class="mt-1 text-sm text-gray-500">Ubah konten yang akan tampil di halaman publik.</p>
                    </div>
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan
                        Perubahan</button>
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
                <div class="mt-6 space-y-6 border-t pt-6">
                    <div>
                        <label for="visi" class="block text-sm font-medium text-gray-700">Visi</label>
                        <textarea id="visi" name="visi" rows="3"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('visi', $visiMisi->visi) }}</textarea>
                    </div>
                    <div>
                        <label for="misi" class="block text-sm font-medium text-gray-700">Misi</label>
                        <textarea id="misi" name="misi" rows="5"
                            class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('misi', $visiMisi->misi) }}</textarea>
                        <p class="mt-1 text-xs text-gray-500">Tips: Buat baris baru untuk setiap poin misi.</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
