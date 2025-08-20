@extends('layouts.admin')
@section('title', 'Detail Sertifikasi')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Sertifikasi Halal</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai sertifikasi.</p>
                </div>
                <a href="{{ route('admin.sertifikasis.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama UMKM</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $sertifikasi->nama_umkm }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nomor Sertifikat</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $sertifikasi->nomor_sertifikat ?? '-' }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Tanggal Terbit</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $sertifikasi->tanggal_terbit->isoFormat('D MMMM YYYY') }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Tanggal Kedaluwarsa</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm-col-span-2">
                        {{ $sertifikasi->tanggal_kedaluwarsa->isoFormat('D MMMM YYYY') }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        @if ($sertifikasi->tanggal_kedaluwarsa->isFuture())
                            <span
                                class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">Aktif</span>
                        @else
                            <span
                                class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-800">Kedaluwarsa</span>
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
