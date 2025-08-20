@extends('layouts.admin')
@section('title', 'Detail Video')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Video</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai video.</p>
                </div>
                <a href="{{ route('admin.videos.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            {{-- Video Player Responsif --}}
            @if ($video->video_url)
                <div class="aspect-w-16 aspect-h-9">
                    @php
                        // Mengubah URL YouTube biasa menjadi URL untuk embed
                        $embedUrl = $video->video_url;
                        if (strpos($embedUrl, 'watch?v=') !== false) {
                            $embedUrl = str_replace('watch?v=', 'embed/', $embedUrl);
                        } elseif (strpos($embedUrl, 'youtu.be/') !== false) {
                            $embedUrl = str_replace('youtu.be/', 'youtube.com/embed/', $embedUrl);
                        }
                    @endphp
                    <iframe src="{{ $embedUrl }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="w-full h-full"></iframe>
                </div>
            @endif
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Judul</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $video->judul }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Kategori</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $video->kategori ?? '-' }}</dd>
                </div>
                @if ($video->deskripsi)
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                            {{ $video->deskripsi }}</dd>
                    </div>
                @endif
            </dl>
        </div>
    </div>
@endsection
