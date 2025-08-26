@extends('layouts.app')

@section('title', 'Publikasi')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section class="text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Publikasi</h1>
            <p class="text-gray-500 mt-2">Arsip dokumen, laporan, dan materi yang telah kami publikasikan.</p>
            <hr class="mt-8 mb-12 border-jabal-green border-t-2 w-24 mx-auto">
        </section>

        {{-- Konten dibungkus dalam satu kartu putih --}}
        <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8">

            {{-- Filter Dropdown --}}
            @if ($kategoris->isNotEmpty())
                <div class="mb-8 flex flex-col items-center">
                    <label for="kategori_filter" class="text-lg font-semibold text-gray-700 mb-3">Tampilkan Kategori:</label>
                    <form action="{{ route('publikasi.index') }}" method="GET" class="inline-block">
                        <div class="relative">
                            <select name="kategori" id="kategori_filter" onchange="this.form.submit()"
                                class="appearance-none block w-64 rounded-lg border-2 border-gray-300 bg-white py-2.5 pl-4 pr-10 text-base shadow-lg focus:border-jabal-green focus:outline-none focus:ring-jabal-green sm:text-sm transition">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori }}"
                                        {{ $selectedKategori == $kategori ? 'selected' : '' }}>
                                        {{ $kategori }}
                                    </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
            @endif

            {{-- Konten Dinamis Berdasarkan Kategori --}}
            @if ($publikasiItems->isNotEmpty())

                {{-- JIKA KATEGORI ADALAH BUKU ATAU PERINGATAN HARI BESAR, TAMPILKAN SEBAGAI GALERI FOTO --}}
                @if (in_array($selectedKategori, ['Khazanah', 'Peringatan Hari Besar']))

                    {{-- UBAH BAGIAN INI DARI md:grid-cols-3 MENJADI md:grid-cols-2 --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        @foreach ($publikasiItems as $item)
                            <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                                class="block rounded-lg overflow-hidden group relative border-2 border-transparent hover:border-jabal-green transition-all duration-300 shadow-md">
                                <div class="aspect-square">
                                    <img src="{{ asset('storage/' . $item->file) }}" alt="{{ $item->nama }}"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <p class="text-white font-semibold text-lg">{{ $item->nama }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    {{-- JIKA KATEGORI LAIN, TAMPILKAN SEBAGAI DAFTAR FILE --}}
                @else
                    <div class="space-y-4">
                        @foreach ($publikasiItems as $item)
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div class="flex items-center min-w-0">
                                    <i class="bi bi-file-earmark-text text-jabal-green text-2xl flex-shrink-0 mr-4"></i>
                                    <span class="text-gray-800 font-medium truncate">{{ $item->nama }}</span>
                                </div>
                                <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                                    class="px-4 py-2 bg-jabal-green text-white text-sm font-semibold rounded-md hover:opacity-90 transition-opacity flex-shrink-0 ml-4">
                                    Unduh
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            @else
                {{-- Tampilan jika tidak ada data sama sekali --}}
                <div class="text-center py-10">
                    <h2 class="text-2xl text-gray-600">Belum Ada Publikasi</h2>
                    <p class="text-gray-500 mt-2">Saat ini belum ada dokumen untuk kategori "{{ $selectedKategori }}".</p>
                </div>
            @endif
        </section>

    </div>
@endsection
