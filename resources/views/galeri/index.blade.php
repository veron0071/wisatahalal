@extends('layouts.app')
@section('title', 'Galeri Kegiatan')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section class="text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Galeri Kegiatan</h1>
            <p class="text-gray-500 mt-2">Dokumentasi visual dari berbagai acara dan kegiatan kami.</p>
            <hr class="mt-8 mb-12 border-jabal-green border-t-2 w-24 mx-auto">
        </section>

        {{-- Konten Galeri --}}
        <section class="pb-12">
            @if ($fotos->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                    @foreach ($fotos as $foto)
                        {{-- Setiap kartu adalah link ke halaman detail (jika ada) atau bisa juga tidak --}}
                        <div class="block bg-white rounded-2xl custom-shadow overflow-hidden group relative">

                            {{-- Gambar --}}
                            <img src="{{ asset('storage/' . $foto->foto) }}" alt="{{ $foto->keterangan }}"
                                class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-300">

                            {{-- Overlay Gradien Gelap di Bawah --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                            {{-- Teks Keterangan di Atas Gambar --}}
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <p class="text-white font-semibold text-lg">{{ $foto->keterangan }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>

                {{-- Paginasi --}}
                <div class="mt-12">
                    {{ $fotos->links() }}
                </div>
            @else
                <div class="col-span-full text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Galeri Masih Kosong</h2>
                    <p class="text-gray-500 mt-2">Saat ini belum ada foto kegiatan yang dipublikasikan.</p>
                </div>
            @endif
        </section>

    </div>

@endsection
