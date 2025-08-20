@extends('layouts.admin')
@section('title', 'Detail Fasilitas')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Data Fasilitas</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai fasilitas.</p>
                </div>
                <a href="{{ route('admin.fasilitas.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Foto</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <img class="h-40 w-auto rounded-lg"
                            src="{{ $fasilitas->foto ? asset('storage/' . $fasilitas->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($fasilitas->nama_fasilitas) . '&color=7F9CF5&background=EBF4FF' }}"
                            alt="">
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Fasilitas</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $fasilitas->nama_fasilitas }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Lokasi</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $fasilitas->lokasi }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                        {{ $fasilitas->deskripsi }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
