@extends('layouts.admin')
@section('title', 'Detail Ceramah')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Data Ceramah</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai ceramah.</p>
                </div>
                <a href="{{ route('admin.ceramahs.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Judul</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ceramah->judul }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Pemateri</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ceramah->pemateri }}</dd>
                </div>

                @if ($ceramah->video_url)
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Video</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <div class="aspect-w-16 aspect-h-9">
                                @php
                                    $embedUrl = str_replace('watch?v=', 'embed/', $ceramah->video_url);
                                @endphp
                                <iframe src="{{ $embedUrl }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="rounded-lg"></iframe>
                            </div>
                        </dd>
                    </div>
                @endif

                @if ($ceramah->deskripsi)
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" style="white-space: pre-wrap;">
                            {{ $ceramah->deskripsi }}</dd>
                    </div>
                @endif
            </dl>
        </div>
    </div>
@endsection
