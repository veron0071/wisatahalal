@extends('layouts.app')
@section('title', 'Industri Keuangan Syariah')

@section('content')

    {{-- Inisialisasi Alpine.js untuk fitur Lightbox --}}
    <div x-data="{ open: false, selectedImage: '', selectedJudul: '' }" class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold text-jabal-green">Industri Keuangan Syariah</h1>
            <p class="text-gray-500 mt-2">Lembaga dan Produk dalam Ekosistem Keuangan Syariah</p>
            <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
        </section>

        {{-- Konten Galeri --}}
        <section class="pb-12">
            @if ($items->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                    @foreach ($items as $item)
                        {{-- Setiap kartu diberi @click untuk membuka Lightbox --}}
                        <div @click="open = true; selectedImage = '{{ asset('storage/' . $item->foto) }}'; selectedJudul = '{{ addslashes($item->judul) }}'"
                            class="cursor-pointer block bg-white rounded-2xl custom-shadow overflow-hidden group relative">

                            {{-- Gambar --}}
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" loading="lazy"
                                class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-300">

                            {{-- Overlay Gradien Gelap di Bawah --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                            {{-- Teks Judul di Atas Gambar --}}
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <p class="text-white font-semibold text-lg">{{ $item->judul }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>

                {{-- Paginasi --}}
                <div class="mt-12">
                    {{ $items->links() }}
                </div>
            @else
                <div class="col-span-full text-center py-16">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <h2 class="mt-2 text-2xl font-semibold text-gray-700">Galeri Masih Kosong</h2>
                    <p class="text-gray-500 mt-1">Saat ini belum ada data yang dipublikasikan.</p>
                </div>
            @endif
        </section>

        <!-- Lightbox Modal (Tampilan Pop-up Gambar) -->
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
             x-transition:leave="ease-in duration-200" x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center p-4" style="display: none;">
            
            <div @click="open = false" class="fixed inset-0 bg-black/80 backdrop-blur-sm"></div>

            <div @click.away="open = false" class="relative bg-white rounded-lg shadow-xl w-full max-w-4xl p-4">
                <img :src="selectedImage" :alt="selectedJudul" class="w-full h-auto max-h-[85vh] object-contain rounded-md">
                <p x-text="selectedJudul" class="text-center mt-4 text-gray-800 font-semibold"></p>
                
                <button @click="open = false" class="absolute -top-3 -right-3 text-white bg-jabal-green rounded-full p-1.5 hover:bg-jabal-light transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>

    </div>

@endsection