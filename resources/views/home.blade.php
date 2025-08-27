@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')
    {{-- HERO SECTION --}}
    @if ($homeSetting)
        <section>
            <div class="relative bg-cover bg-center text-white text-center py-20 md:py-28 px-6 overflow-hidden"
                style="background-image: url('{{ $homeSetting->foto ? asset('storage/' . $homeSetting->foto) : '' }}');">
                <div class="absolute inset-0 bg-black/30"></div>
                <div class="relative z-10">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ $homeSetting->judul }}</h1>
                    <p class="max-w-2xl mx-auto mt-3">{{ $homeSetting->sub_judul }}</p>
                    <a href="{{ $homeSetting->link }}"
                        class="mt-6 inline-block bg-white text-jabal-green font-semibold px-8 py-3 rounded-full shadow-md hover:bg-gray-100 transition-transform hover:-translate-y-1">Mulai
                        Explorasi</a>
                </div>
            </div>
        </section>
    @endif

    <div class="container mx-auto px-6 md:px-12 py-16">
        <hr class="border-jabal-green border-t-2">

        {{-- SELAYANG PANDANG --}}
        @if ($profil)
            <section id="selayang-pandang" class="pt-16 pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-jabal-green">Selayang Pandang</h2>
                        <h3 class="text-xl font-semibold text-gray-700 mt-1">Pengurus Daerah Masyarakat Ekonomi Syariah</h3>
                        <p class="text-lg text-gray-600">Kabupaten Kendal</p>
                        <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                    </div>
                    <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-6 text-justify">
                        <div class="leading-relaxed">{!! nl2br(e($profil->pendahuluan)) !!}</div>
                        <div class="pt-6 mt-8 border-t">
                            <h4 class="text-2xl font-bold text-jabal-green mb-4">Tujuan dan Manfaat</h4>
                            <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->tujuan_manfaat)) !!}</div>
                        </div>
                        <div class="pt-6 mt-8 border-t">
                            <h4 class="text-2xl font-bold text-jabal-green mb-4">Target</h4>
                            <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->target)) !!}</div>
                        </div>
                        <div class="pt-6 mt-8 border-t">
                            <h4 class="text-2xl font-bold text-jabal-green mb-4">Legal Formal</h4>
                            {{-- BARIS INI TELAH DIPERBAIKI --}}
                            <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->legal_formal)) !!}</div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- VISI MISI --}}
        @if ($visiMisi)
            <section class="pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <h2 class="text-2xl md:text-3xl font-bold text-center text-jabal-green mb-10">Visi dan Misi Masyarakat
                        Ekonomi Syariah</h2>
                    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                        <div>
                            <div class="flex items-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-jabal-green mr-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <h3 class="text-2xl font-bold text-jabal-green">Visi</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">{{ $visiMisi->visi }}</p>
                        </div>
                        <div>
                            <div class="flex items-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-jabal-green mr-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h3 class="text-2xl font-bold text-jabal-green">Misi</h3>
                            </div>
                            <div class="prose max-w-none text-gray-600">{!! nl2br(e($visiMisi->misi)) !!}</div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- STRUKTUR ORGANISASI --}}
        @if ($struktur)
            <section class="pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-jabal-green">Struktur Organisasi</h2>
                        <p class="text-lg font-semibold text-gray-700 mt-2">SUSUNAN PENGURUS DAERAH MASYARAKAT EKONOMI
                            SYARIAH</p>
                        <p class="text-md text-gray-600">KABUPATEN KENDAL PERIODE 1446-1451 H / 2024-2029 M</p>
                        <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                    </div>
                    <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-8">
                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">A. DEWAN PEMBINA</h3>
                            <div class="pl-4 prose max-w-none">{!! nl2br(e($struktur->dewan_pembina)) !!}</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">B. DEWAN PAKAR</h3>
                            <div class="pl-4 prose max-w-none">{!! nl2br(e($struktur->dewan_pakar)) !!}</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">C. BADAN PENGURUS HARIAN</h3>
                            <div class="pl-4 prose max-w-none">{!! nl2br(e($struktur->badan_pengurus_harian)) !!}</div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">D. BIDANG-BIDANG</h3>
                            <div class="pl-4 prose max-w-none">{!! nl2br(e($struktur->bidang_bidang)) !!}</div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- ROADMAP ORGANISASI --}}
        @if ($roadmap)
            <section class="pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-jabal-green">Roadmap Organisasi</h2>
                        <p class="text-lg text-gray-600 mt-1">Masyarakat Ekonomi Syariah</p>
                        <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                    </div>

                    @if ($roadmap->gambar_roadmap)
                        <div class="mb-12">
                            <img src="{{ asset('storage/' . $roadmap->gambar_roadmap) }}" alt="Roadmap Organisasi"
                                class="w-full max-w-4xl mx-auto rounded-lg shadow-lg">
                        </div>
                    @endif

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
        @endif
    </div>
@endsection
