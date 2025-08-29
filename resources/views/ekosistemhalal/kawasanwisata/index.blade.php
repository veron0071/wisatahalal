@extends('layouts.app')
@section('title', 'Kawasan Wisata Halal')

@section('content')

    @if ($kawasans->count() > 0)
        {{-- Inisialisasi Alpine.js dengan data unggulan dari controller --}}
        <div x-data="{
            featured: {{ Js::from($featuredKawasan ?? $kawasans->first()) }},
            updateFeatured(kawasan) {
                this.featured = kawasan;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            },
            openMedia(url, isVideo = false) {
                if (isVideo) {
                    window.open(url, '_blank');
                } else {
                    // Untuk gambar, buka di tab baru
                    window.open(url, '_blank');
                }
            }
        }" class="container mx-auto px-6 md:px-12 py-12">

            {{-- Judul Halaman --}}
            <section class="text-center mb-12">
                <h1 class="text-4xl font-bold text-jabal-green">Kawasan Wisata Halal</h1>
                <p class="text-gray-500 mt-2">Jelajahi Destinasi Unggulan Berbasis Syariah di Kendal</p>
            </section>

            {{-- Bagian Unggulan (Featured) dengan Desain Baru --}}
            <section class="bg-white rounded-2xl custom-shadow p-8 md:p-12" x-show="featured">
                <div class="grid md:grid-cols-5 gap-8 md:gap-12 items-start">

                    {{-- Kolom Kiri: Galeri Dokumentasi --}}
                    <div class="md:col-span-2">
                        {{-- Gambar Utama --}}
                        <div class="mb-4 rounded-xl overflow-hidden shadow-lg">
                            <img :src="featured.dokumentasi && featured.dokumentasi.find(doc => doc.file_type === 'image') ?
                                '/storage/' + featured.dokumentasi.find(doc => doc.file_type === 'image').file_path :
                                'https://placehold.co/600x400/e2e8f0/94a3b8?text=Gambar+Utama'"
                                :alt="featured.judul"
                                class="w-full h-64 object-cover transition-all duration-300 hover:scale-105">
                        </div>

                        {{-- Thumbnail Galeri dengan Desain Baru --}}
                        <div x-show="featured.dokumentasi && featured.dokumentasi.length > 1" class="mt-6">
                            <h3 class="text-lg font-semibold text-jabal-green mb-3">Galeri Dokumentasi</h3>
                            <div class="grid grid-cols-4 gap-3">
                                <template x-for="(doc, index) in featured.dokumentasi.slice(0, 4)" :key="index">
                                    <div @click="openMedia('/storage/' + doc.file_path, doc.file_type === 'video')"
                                        class="group relative block rounded-lg overflow-hidden border-2 border-transparent hover:border-jabal-green transition-all duration-300 cursor-pointer">
                                        <div class="aspect-square bg-gray-100">
                                            <template x-if="doc.file_type === 'image'">
                                                <img :src="'/storage/' + doc.file_path" :alt="'Dokumentasi ' + (index + 1)"
                                                    class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-300">
                                            </template>

                                            <template x-if="doc.file_type === 'video'">
                                                <div
                                                    class="w-full h-full bg-gray-800 flex items-center justify-center text-white relative">
                                                    <svg class="w-6 h-6 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <div
                                                        class="absolute bottom-1 right-1 bg-black bg-opacity-60 rounded px-1 py-0.5">
                                                        <svg class="w-3 h-3 text-white" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                            <svg x-show="doc.file_type === 'image'"
                                                class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transform scale-90 group-hover:scale-100 transition-all duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3-3H7" />
                                            </svg>
                                            <svg x-show="doc.file_type === 'video'"
                                                class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transform scale-90 group-hover:scale-100 transition-all duration-300"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            {{-- Indicator jumlah foto lainnya --}}
                            <div x-show="featured.dokumentasi.length > 4" class="mt-3 text-center">
                                <span class="text-sm text-gray-500">+ <span x-text="featured.dokumentasi.length - 4"></span>
                                    foto/video lainnya</span>
                            </div>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Detail Teks --}}
                    <div class="md:col-span-3">
                        <h2 class="text-3xl font-bold text-jabal-green" x-text="featured.judul"></h2>
                        <div class="flex flex-wrap gap-4 mt-4 mb-6">
                            <a x-show="featured.lokasi_gmaps" :href="featured.lokasi_gmaps" target="_blank"
                                class="inline-flex items-center gap-2 bg-jabal-light/10 text-jabal-green font-semibold px-4 py-2 rounded-full hover:bg-jabal-light/20 transition-colors text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Lihat Lokasi
                            </a>
                            <a x-show="featured.link_umkm" :href="featured.link_umkm" target="_blank"
                                class="inline-flex items-center gap-2 bg-jabal-light/10 text-jabal-green font-semibold px-4 py-2 rounded-full hover:bg-jabal-light/20 transition-colors text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                UMKM Sekitar
                            </a>
                        </div>
                        <div class="space-y-6 text-gray-700 prose max-w-none">
                            <div x-show="featured.sejarah_perkembangan">
                                <h3 class="text-xl font-bold text-jabal-green">Sejarah & Perkembangan</h3>
                                <p class="leading-relaxed text-justify"
                                    x-html="featured.sejarah_perkembangan ? featured.sejarah_perkembangan.replace(/\n/g, '<br>') : ''">
                                </p>
                            </div>
                            <div x-show="featured.fasilitas_kondisi">
                                <h3 class="text-xl font-bold text-jabal-green">Fasilitas & Kondisi</h3>
                                <p class="leading-relaxed text-justify"
                                    x-html="featured.fasilitas_kondisi ? featured.fasilitas_kondisi.replace(/\n/g, '<br>') : ''">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Daftar Kawasan Lainnya --}}
            <section class="mt-16">
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Jelajahi Kawasan Lainnya</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($kawasans as $kawasan)
                        <div @click="updateFeatured({{ Js::from($kawasan) }})"
                            class="cursor-pointer bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5 group">
                            <div class="relative">
                                @php
                                    $thumbnail = $kawasan->dokumentasi->where('file_type', 'image')->first();
                                @endphp
                                @if ($thumbnail)
                                    <img src="{{ asset('storage/' . $thumbnail->file_path) }}" alt="{{ $kawasan->judul }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-400">Tidak ada gambar</span>
                                    </div>
                                @endif
                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white font-semibold">Lihat Detail</span>
                                </div>
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="text-xl font-bold text-jabal-green text-center">{{ $kawasan->judul }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{ $kawasans->links() }}
                </div>
            </section>
        </div>
    @else
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Kawasan Wisata Halal</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada data yang bisa ditampilkan.</p>
        </div>
    @endif

@endsection
