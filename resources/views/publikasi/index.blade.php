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

            @if ($kategoris->isNotEmpty())
                <div class="mb-8 flex flex-col items-center">
                    <label for="kategori_filter" class="text-lg font-semibold text-gray-700 mb-3">
                        Tampilkan Kategori:
                    </label>

                    <form action="{{ route('publikasi.index') }}" method="GET" class="inline-block w-64">
                        <div x-data="{ open: false, selected: '{{ $selectedKategori }}' }" class="relative">
                            {{-- Tombol Dropdown --}}
                            <button type="button" @click="open = !open"
                                class="w-full flex justify-between items-center rounded-xl border border-gray-300 bg-white px-4 py-3 shadow-md
                           text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-jabal-green/30 transition">
                                <span x-text="selected"></span>
                                <svg class="h-5 w-5 text-jabal-green transform transition-transform"
                                    :class="open ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            {{-- Pilihan --}}
                            <ul x-show="open" @click.outside="open = false"
                                class="absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden">
                                @foreach ($kategoris as $kategori)
                                    <li>
                                        <button type="submit" name="kategori" value="{{ $kategori }}"
                                            @click="selected = '{{ $kategori }}'; open = false"
                                            class="w-full text-left px-4 py-2 text-gray-700 hover:bg-jabal-green hover:text-white transition">
                                            {{ $kategori }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
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
