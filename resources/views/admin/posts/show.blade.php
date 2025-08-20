@extends('layouts.admin')
@section('title', 'Detail Post')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $post->judul }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Kategori: <span
                            class="font-semibold">{{ $post->kategori }}</span></p>
                </div>
                <a href="{{ route('admin.posts.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Kembali</a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            @if ($post->foto)
                <div>
                    <img class="h-64 w-full object-cover" src="{{ asset('storage/' . $post->foto) }}"
                        alt="{{ $post->judul }}">
                </div>
            @endif
            <div class="p-6">
                <div class="prose max-w-none">
                    {!! nl2br(e($post->isi)) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
