@extends('layouts.admin')
@section('title', 'Detail Artikel Ilmiah')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Artikel Ilmiah</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai artikel.</p>
                </div><a href="{{ route('admin.artikel-ilmiah.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Artikel</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $artikel->nama }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">File Tersimpan</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-pan-2"><a
                            href="{{ asset('storage/' . $artikel->file_artikel) }}" target="_blank"
                            class="font-medium text-indigo-600 hover:text-indigo-500"><i class="bi bi-download"></i> Unduh
                            File Artikel</a></dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
