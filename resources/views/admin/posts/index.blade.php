@extends('layouts.admin')
@section('title', 'Posts')
@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Posts</h1>
                <p class="mt-2 text-sm text-gray-700">Daftar semua berita dan pengumuman.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('admin.posts.create') }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Buat
                    Post Baru</a>
            </div>
        </div>
        @if (session('success'))
            <div class="mt-4 rounded-md bg-green-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.06 0l4-5.5z"
                                clip-rule="evenodd" />
                        </svg></div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Judul
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Kategori</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"><span
                                            class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($posts as $post)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0"><img
                                                        class="h-10 w-10 rounded-md object-cover"
                                                        src="{{ $post->foto ? asset('storage/' . $post->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($post->judul) . '&color=7F9CF5&background=EBF4FF' }}"
                                                        alt=""></div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">{{ $post->judul }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><span
                                                class="inline-flex items-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-xs font-medium text-indigo-800">{{ $post->kategori }}</span>
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex justify-end gap-x-4">
                                                <a href="{{ route('admin.posts.show', $post->id) }}"
                                                    class="text-gray-500 hover:text-indigo-600">Detail</a>
                                                <a href="{{ route('admin.posts.edit', $post->id) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">@csrf
                                                    @method('DELETE')<button type="submit"
                                                        class="text-red-600 hover:text-red-900">Hapus</button></form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-3 py-4 text-center text-sm text-gray-500">Belum ada
                                            post.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $posts->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
