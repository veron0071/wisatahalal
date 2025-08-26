@extends('layouts.app')
@section('title', 'Opini & Berita')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Opini & Berita</h1>
            <p class="text-gray-500 mt-1">Wawasan dan Informasi Terbaru Seputar Ekonomi Syariah</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Grid Kartu Berita --}}
        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Kartu 1 (Contoh Opini) --}}
                <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop" alt="Gambar Opini" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-sm font-semibold text-jabal-light bg-jabal-light/10 px-3 py-1 rounded-full mb-3 self-start">Opini</span>
                        <h3 class="text-xl font-bold text-jabal-green mb-2">
                            <a href="#" class="hover:underline">Peran Ekonomi Syariah dalam Pembangunan Berkelanjutan</a>
                        </h3>
                        <div class="text-xs text-gray-500 mb-4">Oleh: M. Irkham Fukhuludin | {{ date('d F Y') }}</div>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Ekonomi syariah menawarkan kerangka kerja yang unik untuk mencapai tujuan pembangunan berkelanjutan (SDGs) dengan prinsip keadilan dan keseimbangan...
                        </p>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#" class="font-semibold text-jabal-green hover:text-jabal-light">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- Kartu 2 (Contoh Berita) --}}
                <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?q=80&w=2070&auto=format&fit=crop" alt="Gambar Berita" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full mb-3 self-start">Berita</span>
                        <h3 class="text-xl font-bold text-jabal-green mb-2">
                            <a href="#" class="hover:underline">MES Kendal Luncurkan Program Pendampingan UMKM Halal</a>
                        </h3>
                        <div class="text-xs text-gray-500 mb-4">Oleh: Tim Redaksi | {{ date('d F Y', strtotime('-1 day')) }}</div>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Pengurus Daerah MES Kendal hari ini secara resmi meluncurkan program pendampingan intensif bagi puluhan UMKM lokal untuk mendapatkan sertifikasi halal...
                        </p>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#" class="font-semibold text-jabal-green hover:text-jabal-light">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- Kartu 3 (Contoh Analisis) --}}
                <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1639755243943-3c9905689b09?q=80&w=1925&auto=format&fit=crop" alt="Gambar Analisis" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-sm font-semibold text-purple-600 bg-purple-100 px-3 py-1 rounded-full mb-3 self-start">Analisis</span>
                        <h3 class="text-xl font-bold text-jabal-green mb-2">
                            <a href="#" class="hover:underline">Potensi Wakaf Produktif untuk Sektor Pendidikan di Kendal</a>
                        </h3>
                        <div class="text-xs text-gray-500 mb-4">Oleh: Dr. H. Abdul Ghofur, MAg | {{ date('d F Y', strtotime('-3 day')) }}</div>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Wakaf produktif memiliki potensi luar biasa yang belum tergarap maksimal, khususnya untuk mendukung infrastruktur dan operasional lembaga pendidikan...
                        </p>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#" class="font-semibold text-jabal-green hover:text-jabal-light">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- Anda bisa menambahkan lebih banyak kartu di sini dengan loop @foreach dari database --}}

            </div>

            <div class="mt-12 text-center">
                <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Previous</span>
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" aria-current="page" class="z-10 bg-jabal-green/10 border-jabal-green text-jabal-green relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Next</span>
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </a>
                </nav>
            </div>
            
        </section>

    </div>

@endsection