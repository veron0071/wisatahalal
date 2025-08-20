@extends('layouts.admin')
@section('title', 'Detail Lokasi Ziarah')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Lokasi Ziarah</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai lokasi ziarah.</p>
                </div>
                <a href="{{ route('admin.ziarahs.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Lokasi</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ziarah->nama_lokasi }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Peta Lokasi</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                            <iframe src="{{ $ziarah->google_maps_link }}" class="w-full h-full" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
                        </div>
                    </dd>
                </div>
                @if ($ziarah->deskripsi)
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                            {{ $ziarah->deskripsi }}</dd>
                    </div>
                @endif
            </dl>
        </div>
    @endsection
