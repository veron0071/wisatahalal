@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    {{-- Bagian Header Sambutan --}}
    <div>
        <h1 class="text-2xl font-semibold text-gray-900">Selamat Datang, {{ Auth::user()->name }}!</h1>
        <p class="mt-2 text-sm text-gray-700">Anda berada di Panel Admin. Berikut adalah ringkasan data dari situs Wisata
            Halal Jabal Nur.</p>
    </div>

    {{-- Kartu Statistik --}}
    <div class="mt-8">
        <dl class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Kartu Posts --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-pin-angle-fill text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Posts</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahPosts }}</p>
                </dd>
            </div>

            {{-- Kartu Ulama --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-person-lines-fill text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Ulama</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahUlama }}</p>
                </dd>
            </div>

            {{-- Kartu Fasilitas --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-building text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Fasilitas</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahFasilitas }}</p>
                </dd>
            </div>

            {{-- Kartu UMKM --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-shop text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total UMKM</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahUmkm }}</p>
                </dd>
            </div>

            {{-- Kartu Ceramah --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-mic text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Ceramah</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahCeramah }}</p>
                </dd>
            </div>

            {{-- Kartu Lokasi Ziarah --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-geo-alt text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Lokasi Ziarah</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahZiarah }}</p>
                </dd>
            </div>

            {{-- Kartu Video --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-play-btn text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Video</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahVideo }}</p>
                </dd>
            </div>

            {{-- Kartu Paket Wisata --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-backpack text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Paket Wisata</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahPaketWisata }}</p>
                </dd>
            </div>

            {{-- Kartu Sertifikasi --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-award text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Sertifikasi Halal</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahSertifikasi }}</p>
                </dd>
            </div>

            {{-- Kartu Manuskrip --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-journal-bookmark text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Arsip Manuskrip</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahManuskrip }}</p>
                </dd>
            </div>

            {{-- Kartu Stakeholder --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-people text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Stakeholder</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahStakeholder }}</p>
                </dd>
            </div>

            {{-- Kartu Potensi Kerjasama --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-indigo-500 p-3"><i class="bi bi-diagram-3 text-white"></i></div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Potensi Kerjasama</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahPotensiKerjasama }}</p>
                </dd>
            </div>

        </dl>
    </div>
@endsection
