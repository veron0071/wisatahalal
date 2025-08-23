@extends('layouts.app')
@section('title', 'Struktur Organisasi MES Kendal')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Struktur Organisasi Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Hanya tampilkan jika data ditemukan --}}
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

                    <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-8 prose max-w-none">

                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">A. DEWAN PEMBINA</h3>
                            {{-- Menggunakan nl2br() agar baris baru dari textarea ditampilkan sebagai <br> --}}
                            <div class="pl-4">{!! nl2br(e($struktur->dewan_pembina)) !!}</div>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">B. DEWAN PAKAR</h3>
                            <div class="pl-4">{!! nl2br(e($struktur->dewan_pakar)) !!}</div>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">C. BADAN PENGURUS HARIAN</h3>
                            <div class="pl-4">{!! nl2br(e($struktur->badan_pengurus_harian)) !!}</div>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">D. BIDANG-BIDANG</h3>
                            <div class="pl-4">{!! nl2br(e($struktur->bidang_bidang)) !!}</div>
                        </div>

                    </div>
                </div>
            </section>
        @else
            <section class="text-center py-16">
                <p class="text-gray-500">Konten Struktur Organisasi belum tersedia.</p>
            </section>
        @endif

    </div>
@endsection
