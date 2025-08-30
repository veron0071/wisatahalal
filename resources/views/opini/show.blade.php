{{-- resources/views/opini/show.blade.php --}}
@extends('layouts.app')
@section('title', $post->judul)

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            {{-- Konten Utama Artikel --}}
            <main class="lg:col-span-8">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $post->judul }}</h1>
                    <p class="text-gray-500 mt-3">
                        Ditulis oleh <strong>Admin</strong> | {{ $post->created_at->translatedFormat('d F Y') }}
                    </p>
                    @if ($post->foto_url)
                        <div class="mt-6">
                            <img src="{{ $post->foto_url }}" alt="{{ $post->judul }}"
                                class="w-full h-auto rounded-xl shadow-lg object-cover">
                        </div>
                    @endif
                    <div class="mt-8 prose max-w-none text-justify leading-relaxed text-gray-600">{!! nl2br(e($post->isi)) !!}
                    </div>
                    @if ($post->file_url)
                        <a href="{{ $post->file_url }}" target="_blank"
                            class="mt-8 inline-flex items-center justify-center gap-2 w-full bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-opacity-90 transition-colors shadow-md">
                            Unduh Dokumen Lampiran
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>
                    @endif
                </div>
            </main>

            {{-- Sidebar Postingan Terbaru --}}
            <aside class="lg:col-span-4">
                <div class="sticky top-24">
                    <div class="bg-white rounded-2xl custom-shadow p-6">
                        <h3 class="font-bold text-lg text-gray-800 border-b pb-2 mb-4">POSTINGAN LAINNYA</h3>
                        <div class="space-y-4">
                            @foreach ($recentPosts as $recent)
                                <a href="{{ route('opini.show', $recent->id) }}" class="flex items-center gap-4 group">
                                    @if ($recent->foto_url)
                                        <img src="{{ $recent->foto_url }}"
                                            class="w-20 h-20 rounded-lg object-cover flex-shrink-0"
                                            alt="{{ $recent->judul }}">
                                    @endif
                                    <div>
                                        <p class="font-semibold text-gray-700 group-hover:text-jabal-green">
                                            {{ $recent->judul }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
