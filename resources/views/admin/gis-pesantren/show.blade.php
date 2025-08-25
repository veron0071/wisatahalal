@extends('layouts.admin')
@section('title', 'Detail Foto GIS Pesantren')

@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Foto</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500" title="{{ $foto->keterangan }}">
                        {{ Str::limit($foto->keterangan, 70) }}</p>
                </div>
                <a href="{{ route('admin.gis-pesantren.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200 p-4 flex justify-center">
            <img class="max-w-full h-auto rounded-lg" src="{{ asset('storage/' . $foto->foto) }}"
                alt="{{ $foto->keterangan }}">
        </div>
    </div>
@endsection
