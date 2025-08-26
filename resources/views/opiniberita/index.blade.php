@extends('layouts.app')
@section('title', 'Opini & Berita')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Opini & Berita</h1>
            <p class="text-gray-500 mt-1">Arsip Dokumen, Opini, dan Berita Terbaru</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Grid Kartu Dokumen --}}
        <section>
            {{-- DIUBAH: Menggunakan variabel $opiniBeritas dari controller --}}
            @if ($opiniBeritas->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    {{-- Loop untuk menampilkan setiap file dari database --}}
                    @foreach ($opiniBeritas as $item)
                        <div class="bg-white rounded-2xl custom-shadow p-6 flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            
                            {{-- Ikon Dokumen --}}
                            <div class="flex-shrink-0 text-jabal-green mx-auto">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>

                            <div class="mt-4 flex-grow flex flex-col text-center">
                                {{-- DIUBAH: Mengambil 'nama' dari database --}}
                                <h3 class="text-xl font-bold text-jabal-green flex-grow">{{ $item->nama }}</h3>
                                
                                {{-- DIUBAH: Tombol untuk mengunduh 'file' dari database --}}
                                <a href="{{ asset('storage/' . $item->file) }}" target="_blank" class="mt-6 inline-flex items-center justify-center gap-2 w-full bg-jabal-green text-white font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-light transition-colors">
                                    Unduh Dokumen
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Link Paginasi -->
                <div class="mt-12">
                    {{ $opiniBeritas->links() }}
                </div>
            @else
                <div class="text-center text-gray-500">
                    <p>Belum ada opini atau berita yang dipublikasikan.</p>
                </div>
            @endif
        </section>

    </div>

@endsection