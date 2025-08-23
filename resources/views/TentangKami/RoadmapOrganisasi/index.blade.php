@extends('layouts.app')
@section('title', 'Roadmap Organisasi')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">

        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Roadmap Organisasi Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        @if ($roadmap)
            <section class="pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-jabal-green">Roadmap Organisasi</h2>
                        <p class="text-lg text-gray-600 mt-1">Masyarakat Ekonomi Syariah</p>
                        <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                    </div>

                    {{-- Gambar Roadmap Dinamis --}}
                    @if ($roadmap->gambar_roadmap)
                        <div class="mb-12">
                            <img src="{{ asset('storage/' . $roadmap->gambar_roadmap) }}" alt="Roadmap Organisasi"
                                class="w-full max-w-4xl mx-auto rounded-lg shadow-lg">
                        </div>
                    @endif

                    {{-- Tahapan Roadmap Dinamis --}}
                    <div class="grid md:grid-cols-3 gap-8 text-center">
                        <div class="border-t-4 border-jabal-green pt-4">
                            <h3 class="text-2xl font-bold text-jabal-green">{{ $roadmap->tahap1_tahun }}</h3>
                            <p class="text-gray-600 mt-2">{{ $roadmap->tahap1_deskripsi }}</p>
                        </div>

                        <div class="border-t-4 border-jabal-green pt-4">
                            <h3 class="text-2xl font-bold text-jabal-green">{{ $roadmap->tahap2_tahun }}</h3>
                            <p class="text-gray-600 mt-2">{{ $roadmap->tahap2_deskripsi }}</p>
                        </div>

                        <div class="border-t-4 border-jabal-green pt-4">
                            <h3 class="text-2xl font-bold text-jabal-green">{{ $roadmap->tahap3_tahun }}</h3>
                            <p class="text-gray-600 mt-2">{{ $roadmap->tahap3_deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="text-center py-16">
                <p class="text-gray-500">Konten Roadmap Organisasi belum tersedia.</p>
            </section>
        @endif

    </div>
@endsection
