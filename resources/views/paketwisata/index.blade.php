@extends('layouts.app')
@section('title', 'Paket Wisata')

@section('content')

    @if ($paketWisatas->isNotEmpty())
        <div x-data="{ featured: {{ $paketWisatas->first()->toJson() }} }" class="container mx-auto px-6 md:px-12 py-12">
            <section class="mb-12">
                <h1 class="text-4xl font-bold text-jabal-green text-center">Paket Wisata</h1>
                <p class="text-center text-gray-500 mt-2">Pilihan Perjalanan Wisata Halal Terbaik</p>
            </section>

            {{-- Bagian Unggulan (Featured) dengan data baru --}}
            <section class="bg-white rounded-2xl custom-shadow p-8 md:p-12 flex flex-col md:flex-row items-center gap-8 md:gap-16">
                <div class="md:w-3/5 text-gray-600">
                    {{-- Diubah dari 'nama_paket' menjadi 'nama' --}}
                    <h2 class="text-3xl font-bold text-jabal-green mb-2" x-text="featured.nama"></h2>

                    {{-- Menampilkan Harga --}}
                    <p class="text-2xl font-semibold text-jabal-light mb-4" x-text="'Rp ' + new Intl.NumberFormat('id-ID').format(featured.harga)"></p>
                    
                    {{-- Menampilkan Deskripsi --}}
                    <p class="text-base leading-relaxed text-justify" x-html="featured.deskripsi ? featured.deskripsi.replace(/\n/g, '<br>') : 'Tidak ada deskripsi.'"></p>

                    {{-- Menampilkan Fasilitas --}}
                    <div class="mt-6 pt-4 border-t">
                         <h4 class="font-semibold text-gray-800 mb-2">Fasilitas Termasuk:</h4>
                         <div class="text-sm" x-html="featured.fasilitas ? featured.fasilitas.replace(/\n/g, '<br>') : 'Tidak ada informasi fasilitas.'"></div>
                    </div>
                </div>
                <div class="md:w-2/5 flex justify-center">
                    {{-- Diubah dari 'nama_paket' menjadi 'nama' --}}
                    <img :src="'/storage/' + featured.foto" :alt="featured.nama"
                        class="rounded-lg shadow-lg object-cover w-full max-w-xs h-80 transition-all duration-300">
                </div>
            </section>

            {{-- Daftar Paket Lainnya --}}
            <section class="mt-16">
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Daftar Paket Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach ($paketWisatas as $paket)
                        <div @click="featured = {{ $paket->toJson() }}; window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="cursor-pointer bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            
                            @if ($paket->foto)
                                <img src="{{ asset('storage/' . $paket->foto) }}" alt="{{ $paket->nama }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-400">Tidak ada gambar</span>
                                </div>
                            @endif

                            <div class="p-6 flex-grow flex flex-col">
                                {{-- Diubah dari 'nama_paket' menjadi 'nama' --}}
                                <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">{{ $paket->nama }}</h3>
                                <div class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full">
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="mt-12">
                    {{ $paketWisatas->links() }}
                </div>
            </section>
        </div>
    @else
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Paket Wisata</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada paket wisata yang bisa ditampilkan.</p>
        </div>
    @endif

@endsection