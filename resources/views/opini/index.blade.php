{{-- resources/views/opini/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Opini & Berita')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <section class="text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Opini & Berita</h1>
            <p class="text-gray-500 mt-2">Wawasan dan informasi terkini dari Masyarakat Ekonomi Syariah Kendal.</p>
            <hr class="mt-8 mb-12 border-jabal-green border-t-2 w-24 mx-auto">
        </section>

        <section class="pb-12">
            @if ($posts->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                        {{-- Setiap kartu adalah link ke halaman detail --}}
                        <a href="{{ route('opini.show', $post->id) }}"
                            class="block bg-white rounded-2xl custom-shadow overflow-hidden group relative">
                            <div class="aspect-video">
                                <img src="{{ $post->foto_url ?? 'https://via.placeholder.com/400x300' }}"
                                    alt="{{ $post->judul }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="p-5">
                                <p class="font-bold text-lg text-gray-800 group-hover:text-jabal-green transition-colors">
                                    {{ Str::limit($post->judul, 50) }}</p>
                                <p class="text-sm text-gray-500 mt-2">{{ $post->created_at->translatedFormat('d F Y') }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links('vendor.pagination.tailwind') }}
                </div>
            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Belum Ada Postingan</h2>
                </div>
            @endif
        </section>
    </div>
@endsection
