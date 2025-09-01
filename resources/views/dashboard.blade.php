@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    {{-- Bagian Header Sambutan --}}
    <div>
        <h1 class="text-2xl font-semibold text-gray-900">Selamat Datang, {{ Auth::user()->name }}!</h1>
        <p class="mt-2 text-sm text-gray-700">Berikut adalah ringkasan data dari panel admin Anda.</p>
    </div>



    {{-- Kartu Statistik --}}
    <div class="mt-8">
        <dl class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Kartu Publikasi --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-book-half text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Publikasi</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahPublikasi }}</p>
                </dd>
            </div>

            {{-- Kartu Program Kerja --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-kanban text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Program Kerja</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahProgramKerja }}</p>
                </dd>
            </div>

            {{-- Kartu Opini & Berita --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-newspaper text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Opini & Berita</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahOpini }}</p>
                </dd>
            </div>

            {{-- Kartu Galeri Kegiatan --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-images text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Galeri Kegiatan</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahGaleri }}</p>
                </dd>
            </div>

            {{-- Kartu Kawasan Wisata Halal --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-compass text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Data Kawasan Wisata</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahKawasan }}</p>
                </dd>
            </div>

            {{-- Kartu Potensi Kerjasama --}}
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-8 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                        <i class="bi bi-diagram-3 text-2xl text-white"></i>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">Potensi Kerjasama</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">{{ $jumlahPotensiKerjasama }}</p>
                </dd>
            </div>

        </dl>
    </div>

    {{-- Bagian Akses Cepat --}}
    <div class="mt-10">
        <h2 class="text-lg font-semibold text-gray-900">Akses Cepat</h2>
        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            <a href="{{ route('admin.publikasi.create') }}"
                class="flex flex-col items-center justify-center rounded-lg bg-white p-6 shadow hover:shadow-lg transition-shadow">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-indigo-100">
                    <i class="bi bi-book-half text-2xl text-indigo-600"></i>
                </div>
                <p class="mt-4 font-semibold text-gray-800">Tambah Publikasi Baru</p>
            </a>

            <a href="{{ route('admin.opini.create') }}"
                class="flex flex-col items-center justify-center rounded-lg bg-white p-6 shadow hover:shadow-lg transition-shadow">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-indigo-100">
                    <i class="bi bi-newspaper text-2xl text-indigo-600"></i>
                </div>
                <p class="mt-4 font-semibold text-gray-800">Tambah Opini/Berita</p>
            </a>

            <a href="{{ route('admin.program-kerja.create') }}"
                class="flex flex-col items-center justify-center rounded-lg bg-white p-6 shadow hover:shadow-lg transition-shadow">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-indigo-100">
                    <i class="bi bi-kanban text-2xl text-indigo-600"></i>
                </div>
                <p class="mt-4 font-semibold text-gray-800">Tambah Program Kerja</p>
            </a>

            <a href="{{ route('admin.galeri.create') }}"
                class="flex flex-col items-center justify-center rounded-lg bg-white p-6 shadow hover:shadow-lg transition-shadow">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-indigo-100">
                    <i class="bi bi-images text-2xl text-indigo-600"></i>
                </div>
                <p class="mt-4 font-semibold text-gray-800">Upload Galeri Baru</p>
            </a>

        </div>
    </div>
@endsection
