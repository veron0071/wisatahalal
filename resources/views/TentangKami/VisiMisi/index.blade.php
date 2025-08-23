@extends('layouts.app')
@section('title', 'Visi & Misi MES Kendal')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Visi dan Misi Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Hanya tampilkan konten jika data ditemukan --}}
        @if ($visiMisi)
            <section class="pb-12">
                <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                    <h2 class="text-2xl md:text-3xl font-bold text-center text-jabal-green mb-10">Visi dan Misi Masyarakat
                        Ekonomi Syariah</h2>

                    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                        {{-- Kolom Visi --}}
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
                            <p class="text-gray-600 leading-relaxed text-lg italic">
                                {{-- Mengambil data Visi dari database --}}
                                {{ $visiMisi->visi }}
                            </p>
                        </div>

                        {{-- Kolom Misi --}}
                        <div>
                            <div class="flex items-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-jabal-green mr-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h3 class="text-2xl font-bold text-jabal-green">Misi</h3>
                            </div>
                            <ul class="list-disc list-inside space-y-3 text-gray-600 text-lg">
                                {{-- Mengambil data Misi, memecahnya per baris, dan menampilkannya sebagai daftar --}}
                                @foreach (explode("\n", $visiMisi->misi) as $misi_item)
                                    @if (trim($misi_item))
                                        <li>{{ trim($misi_item) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="text-center py-16">
                <p class="text-gray-500">Konten Visi & Misi belum tersedia.</p>
            </section>
        @endif
    </div>
@endsection
