@extends('layouts.app')
@section('title', 'Komunitas Investor Halal')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Komunitas Investor Halal</h1>
            <p class="text-gray-500 mt-1">Wadah Sinergi dan Edukasi untuk Investasi Berkah</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Konten Utama --}}
        <section class="pb-12">
            <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12 text-center">
                
                <div class="max-w-2xl mx-auto">
                    {{-- Ikon --}}
                    <div class="mx-auto bg-jabal-green/10 text-jabal-green w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>

                    <h2 class="text-3xl font-bold text-jabal-green">Bergabunglah dengan Komunitas Investor Halal</h2>
                    <p class="text-gray-600 mt-4 leading-relaxed">
                        Dapatkan akses eksklusif ke informasi terbaru, diskusi mendalam, serta peluang investasi syariah bersama para ahli dan praktisi di bidangnya. Mari bersama-sama membangun ekosistem investasi yang adil, transparan, dan membawa keberkahan.
                    </p>

                    {{-- Tombol Aksi --}}
                    @if ($link && $link->whatsapp_link)
                        <a href="{{ $link->whatsapp_link }}" target="_blank" class="mt-8 inline-flex items-center gap-3 bg-green-500 text-white font-bold px-8 py-4 rounded-full hover:bg-green-600 shadow-lg transition-all hover:shadow-xl text-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.487 5.235 3.487 8.413 0 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.447-4.435-9.884-9.888-9.884-5.448 0-9.886 4.434-9.889 9.885.002 2.024.603 3.992 1.742 5.688l.263.393-1.019 3.75z"/></svg>
                            Gabung via WhatsApp
                        </a>
                    @else
                        <div class="mt-8">
                            <p class="text-gray-500">Link komunitas akan segera tersedia.</p>
                        </div>
                    @endif
                </div>

            </div>
        </section>

    </div>

@endsection