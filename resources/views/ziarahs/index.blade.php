@extends('layouts.app')
@section('title', 'Lokasi Ziarah')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Lokasi Ziarah</h1>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Perulangan untuk menampilkan setiap lokasi ziarah --}}
        @forelse ($ziarahs as $ziarah)
            <section class="mb-16">
                <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                        <div class="md:w-1/2">
                            <h2 class="text-3xl font-bold text-jabal-green mb-4">{{ $ziarah->nama_lokasi }}</h2>
                            <p class="text-gray-600 leading-relaxed text-justify">
                                {{ $ziarah->deskripsi }}
                            </p>
                            <a href="{{ $ziarah->google_maps_link }}" target="_blank"
                                class="mt-6 inline-flex items-center gap-2 bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-jabal-light shadow-lg transition-all hover:shadow-xl">
                                Kunjungi di Peta
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="md:w-1/2">
                            {{-- Embed Peta Lokasi --}}
                            <div class="relative pt-[56.25%] rounded-lg overflow-hidden shadow-lg">
                                <iframe src="{{ $ziarah->google_maps_link }}" class="absolute top-0 left-0 w-full h-full"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @empty
            <section class="text-center py-16">
                <h2 class="text-2xl font-semibold text-gray-700">Belum Ada Lokasi Ziarah</h2>
                <p class="text-gray-500 mt-2">Saat ini belum ada data lokasi ziarah yang bisa ditampilkan.</p>
            </section>
        @endforelse

        {{-- Link Paginasi --}}
        <div class="mt-8">
            {{ $ziarahs->links() }}
        </div>

    </div>

@endsection
