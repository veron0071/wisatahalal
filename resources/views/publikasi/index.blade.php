@extends('layouts.app')
@section('title', 'Publikasi')

@section('content')

<div class="container mx-auto px-6 md:px-12 py-12">
    
    {{-- Judul Halaman Utama --}}
    <section>
        <h1 class="text-4xl font-bold text-jabal-green">Publikasi</h1>
        <p class="text-gray-500 mt-1">Arsip Dokumen dan Karya Masyarakat Ekonomi Syariah Kendal</p>
        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
    </section>

    {{-- Inisialisasi Alpine.js --}}
    <div x-data="{
        publikasis: {{ $publikasis->toJson() }},
        activeFilter: 'semua'
    }">
        <section class="mb-10">
            <div class="flex flex-wrap justify-center gap-2 md:gap-4">
                <button @click="activeFilter = 'semua'" :class="activeFilter === 'semua' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Semua</button>
                <button @click="activeFilter = 'buku'" :class="activeFilter === 'buku' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Buku</button>
                <button @click="activeFilter = 'khazanah'" :class="activeFilter === 'khazanah' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Khazanah</button>
                <button @click="activeFilter = 'peringatan hari besar'" :class="activeFilter === 'peringatan hari besar' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Peringatan Hari Besar</button>
                <button @click="activeFilter = 'artikel ilmiah'" :class="activeFilter === 'artikel ilmiah' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Artikel Ilmiah</button>
                <button @click="activeFilter = 'materi presentasi'" :class="activeFilter === 'materi presentasi' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Materi Presentasi</button>
                <button @click="activeFilter = 'laporan'" :class="activeFilter === 'laporan' ? 'bg-jabal-green text-white' : 'bg-white text-gray-700'" class="px-5 py-2 text-sm font-semibold rounded-full shadow-sm transition-colors hover:bg-jabal-green/80 hover:text-white">Laporan</button>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Loop melalui data menggunakan Alpine.js --}}
                <template x-for="publikasi in publikasis" :key="publikasi.id">
                    {{-- Tampilkan kartu hanya jika cocok dengan filter --}}
                    <div x-show="activeFilter === 'semua' || activeFilter === publikasi.kategori.toLowerCase()" x-transition
                         class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                        
                        <a :href="'/storage/' + publikasi.file_path" target="_blank">
                            <template x-if="publikasi.thumbnail">
                                <img :src="'/storage/' + publikasi.thumbnail" :alt="publikasi.judul" class="w-full h-48 object-cover">
                            </template>
                            <template x-if="!publikasi.thumbnail">
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                            </template>
                        </a>

                        <div class="p-6 flex-grow flex flex-col">
                            <span class="text-sm font-semibold text-jabal-light capitalize" x-text="publikasi.kategori"></span>
                            <h3 class="text-xl font-bold text-jabal-green mt-2 flex-grow" x-text="publikasi.judul"></h3>
                            <a :href="'/storage/' + publikasi.file_path" target="_blank" class="mt-4 inline-flex items-center gap-2 w-full justify-center bg-jabal-green text-white font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-light transition-colors">
                                Unduh
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </template>

            </div>
        </section>
    </div>

</div>

@endsection