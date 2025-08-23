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
                    <div class="mt-4 rounded-md bg-green-50 p-4">...</div>
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
