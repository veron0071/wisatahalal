@extends('layouts.app')
@section('title', 'UMKM Halal')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        <section class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">UMKM Halal</h1>
            <p class="text-gray-500 mt-2">Dukung Produk Lokal Unggulan dari Kawasan Jabal Nur</p>
        </section>

        @if ($umkms->isNotEmpty())
            {{-- Inisialisasi Alpine.js di elemen paling luar --}}
            <div x-data="pageData()">

                {{-- Bagian UMKM Unggulan --}}
                <section class="bg-white rounded-2xl custom-shadow p-8 md:p-12 mb-16">
                    <template x-if="featured">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                            <div class="md:w-1/2">
                                <template x-if="featured.foto">
                                    <img :src="'/storage/' + featured.foto" :alt="featured.nama_usaha"
                                        class="rounded-xl shadow-lg w-full h-auto object-cover">
                                </template>
                            </div>
                            <div class="md:w-1/2">
                                <h2 class="text-3xl font-bold text-jabal-green mb-2" x-text="featured.nama_usaha"></h2>
                                <p class="text-gray-600">
                                    <span class="font-semibold">Pemilik:</span>
                                    <span x-text="featured.nama_pemilik"></span>
                                </p>
                                <p class="text-gray-600 mt-1">
                                    <span class="font-semibold">Lokasi:</span>
                                    <span x-text="featured.lokasi"></span>
                                </p>
                                <p class="mt-4 text-gray-600 leading-relaxed text-justify"
                                    x-text="featured.deskripsi_produk"></p>
                            </div>
                        </div>
                    </template>
                </section>

                {{-- Galeri UMKM Lainnya --}}
                <section>
                    <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Jelajahi UMKM Lainnya</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($umkms as $umkm)
                            <div @click="setFeatured({{ $loop->index }})"
                                class="cursor-pointer block bg-white rounded-2xl custom-shadow overflow-hidden transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                @if ($umkm->foto)
                                    <div style="background-image: url('{{ asset('storage/' . $umkm->foto) }}');"
                                        class="bg-cover bg-center h-48"></div>
                                @else
                                    <div class="bg-gray-200 h-48 flex items-center justify-center"><span
                                            class="text-gray-400">Foto</span></div>
                                @endif
                                <div class="p-5 text-center">
                                    <h4 class="font-bold text-jabal-green text-lg truncate">{{ $umkm->nama_usaha }}</h4>
                                    <p class="text-sm text-gray-600 mt-1">Pemilik: {{ $umkm->nama_pemilik }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-12">{{ $umkms->links() }}</div>
                </section>
            </div>
        @else
            <div class="text-center py-16">
                <h2 class="text-2xl font-semibold text-gray-700">Belum Ada UMKM</h2>
                <p class="text-gray-500 mt-2">Saat ini belum ada data UMKM yang bisa ditampilkan.</p>
            </div>
        @endif
    </div>

    {{-- Script Alpine.js --}}
    <script>
        function pageData() {
            const umkms = @json($umkms->items());
            return {
                umkms: umkms,
                featured: umkms.length > 0 ? umkms[0] : null,
                setFeatured(index) {
                    this.featured = this.umkms[index];
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    }); // Otomatis scroll ke atas
                }
            };
        }
    </script>
@endsection
