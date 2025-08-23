@extends('layouts.admin')
@section('title', 'Program Kerja')
@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Program Kerja</h1>
                <p class="mt-2 text-sm text-gray-700">Daftar semua program kerja yang terdata.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none"><a href="{{ route('admin.program-kerja.create') }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Tambah
                    Program</a></div>
        </div>
        @if (session('success'))
            <div class="mt-4 rounded-md bg-green-50 p-4">...</div>
        @endif
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Komite Bidang</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Program Kerja</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"><span
                                            class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($programs as $program)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ $program->komite_bidang }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            {{ Str::limit($program->program_kerja, 70) }}</td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex justify-end gap-x-4">
                                                <a href="{{ route('admin.program-kerja.edit', $program->id) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                <form action="{{ route('admin.program-kerja.destroy', $program->id) }}"
                                                    method="POST" onsubmit="return confirm('Yakin?')">@csrf
                                                    @method('DELETE')<button type="submit"
                                                        class="text-red-600 hover:text-red-900">Hapus</button></form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-3 py-4 text-center text-sm text-gray-500">Belum ada
                                            data program kerja.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $programs->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
