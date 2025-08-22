@extends('layouts.app')
@section('title', 'Sejarah Ulama')

@section('content')

    {{-- Hanya tampilkan jika ada data ulama --}}
    @if ($featuredUlama)

        {{-- 1. Inisialisasi 'memori' (state) Alpine.js dengan data ulama unggulan --}}
        <div x-data="{ featured: {{ $featuredUlama->toJson() }} }" class="container mx-auto px-6 md:px-12 py-12">
            <section class="mb-12">
                <h1 class="text-4xl font-bold text-jabal-green text-center">Sejarah Ulama</h1>
                <p class="text-center text-gray-500 mt-2">Mengenal Tokoh-tokoh Berpengaruh di Kawasan Jabal Nur</p>
            </section>

            {{-- 2. Bagian ini sekarang menampilkan data dari 'memori' (featured) secara dinamis --}}
            <section
                class="bg-white rounded-2xl custom-shadow p-8 md:p-12 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
                <div class="md:w-3/5 text-gray-600">
                    <h2 class="text-3xl font-bold text-jabal-green mb-4" x-text="featured.nama"></h2>
                    <p class="text-base leading-relaxed text-justify"
                        x-html="featured.sejarah ? featured.sejarah.replace(/\n/g, '<br>') : ''"></p>
                </div>
                <div class="md:w-2/5 flex justify-center">
                    <img :src="'/storage/' + featured.foto" :alt="featured.nama"
                        class="rounded-lg shadow-lg object-cover w-full max-w-xs h-80 transition-all duration-300">
                </div>
            </section>

            {{-- 3. Bagian Daftar Ulama Lainnya --}}
            <section class="mt-16">
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Daftar Ulama Lainnya</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-8">

                    @foreach ($ulamas as $ulama)
                        {{-- Setiap kartu diberi perintah @click untuk mengubah 'memori' (featured) dengan datanya sendiri --}}
                        <div @click="featured = {{ $ulama->toJson() }}"
                            class="cursor-pointer block bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            @if ($ulama->foto)
                                <div style="background-image: url('{{ asset('storage/' . $ulama->foto) }}');"
                                    class="bg-cover bg-center h-40 rounded-md mb-4"></div>
                            @else
                                <div class="bg-gray-200 h-40 rounded-md mb-4 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            @endif
                            <p class="font-semibold text-jabal-green">{{ $ulama->nama }}</p>
                        </div>
                    @endforeach

                </div>

                <div class="mt-12">
                    {{ $ulamas->links() }}
                </div>
            </section>
        </div>
    @else
        {{-- Tampilan jika tidak ada data ulama sama sekali --}}
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Sejarah Ulama</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada data ulama yang bisa ditampilkan.</p>
        </div>
    @endif

@endsection
