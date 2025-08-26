@extends('layouts.app')
@section('title', 'Sertifikasi Halal')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Sertifikasi Halal</h1>
            <p class="text-gray-500 mt-1">Panduan dan Sumber Daya untuk Proses Sertifikasi Halal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Tampilkan konten hanya jika data link ditemukan --}}
        @if ($links)
            <section class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- Kartu 1: Alur Sertifikasi --}}
                    <a href="{{ $links->alur_sertifikasi_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m-6 3l6-3"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">Alur Sertifikasi</h3>
                        </div>
                    </a>

                    {{-- Kartu 2: Persyaratan --}}
                    <a href="{{ $links->persyaratan_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">Persyaratan</h3>
                        </div>
                    </a>

                    {{-- Kartu 3: PTPS SIHALAL --}}
                    <a href="{{ $links->ptps_sihalal_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9V3m0 18a9 9 0 009-9m-9 9a9 9 0 00-9-9"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">PTPS SIHALAL</h3>
                        </div>
                    </a>

                    {{-- Kartu 4: Pencarian Produk --}}
                    <a href="{{ $links->pencarian_produk_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">Pencarian Produk Halal</h3>
                        </div>
                    </a>

                    {{-- Kartu 5: Modul Self Declare --}}
                    <a href="{{ $links->modul_self_declare_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">Modul Self Declare</h3>
                        </div>
                    </a>

                    {{-- Kartu 6: Modul Reguler --}}
                    <a href="{{ $links->modul_reguler_url }}" target="_blank" class="block bg-slate-50 p-6 rounded-xl border hover:border-jabal-green hover:bg-jabal-green/5 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="bg-jabal-green/10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-jabal-green" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-800 group-hover:text-jabal-green">Modul Reguler</h3>
                        </div>
                    </a>

                </div>
            </section>
        @else
            <div class="text-center text-gray-500">
                <p>Informasi link sertifikasi halal belum tersedia.</p>
            </div>
        @endif

    </div>

@endsection