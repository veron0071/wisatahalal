@extends('layouts.admin')
@section('title', 'Detail Paket Wisata')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Paket Wisata</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai paket wisata.</p>
                </div>
                <a href="{{ route('admin.paketwisatas.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nama Paket</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $paketwisata->nama }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Harga</dt>
                    <dd class="mt-1 text-lg font-semibold text-indigo-600 sm:mt-0 sm:col-span-2">Rp
                        {{ number_format($paketwisata->harga, 0, ',', '.') }}</dd>
                </div>

                @if ($paketwisata->fasilitas)
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Fasilitas</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul class="list-disc space-y-2 pl-5">
                                @foreach (explode(',', $paketwisata->fasilitas) as $item)
                                    <li>{{ trim($item) }}</li>
                                @endforeach
                            </ul>
                        </dd>
                    </div>
                @endif

                @if ($paketwisata->deskripsi)
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                            {{ $paketwisata->deskripsi }}</dd>
                    </div>
                @endif
            </dl>
        </div>
    </div>
@endsection
