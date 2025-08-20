@extends('layouts.admin')
@section('title', 'Detail UMKM')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Data UMKM</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai UMKM.</p>
                </div>
                <a href="{{ route('admin.umkm.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Foto Produk</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><img
                            class="h-40 w-40 rounded-lg object-cover"
                            src="{{ $umkm->foto ? asset('storage/' . $umkm->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($umkm->nama_usaha) . '&color=7F9CF5&background=EBF4FF' }}"
                            alt=""></dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Usaha</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $umkm->nama_usaha }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Pemilik</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $umkm->nama_pemilik }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Lokasi</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $umkm->lokasi }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Sertifikat Halal</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        @if ($umkm->sertifikat_halal)
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">Ya,
                                Bersertifikat</span>
                        @else
                            <span
                                class="inline-flex items-center rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-800">Tidak</span>
                        @endif
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Deskripsi Produk</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                        {{ $umkm->deskripsi_produk }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
