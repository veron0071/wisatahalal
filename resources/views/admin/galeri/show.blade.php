@extends('layouts.admin')
@section('title', 'Detail Foto')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Foto Kegiatan</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500" title="{{ $galeri->keterangan }}">
                        {{ Str::limit($galeri->keterangan, 50) }}</p>
                </div>
                <a href="{{ route('admin.galeri.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200 p-4">
            <img class="w-full h-auto rounded-lg" src="{{ asset('storage/' . $galeri->foto) }}"
                alt="{{ $galeri->keterangan }}">
        </div>
    </div>
@endsection
