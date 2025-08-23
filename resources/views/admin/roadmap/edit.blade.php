@extends('layouts.admin')
@section('title', 'Edit Roadmap Organisasi')

@section('content')
    <form method="POST" action="{{ route('admin.roadmap.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Halaman Roadmap</h3>
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan
                        Perubahan</button>
                </div>

                @if (session('success'))
                    <div class="mt-4 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                                    fill="currentColor">
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

                <div class="mt-6 space-y-6 border-t pt-6">
                    <div>
                        <label for="gambar_roadmap" class="block text-sm font-medium text-gray-700">Gambar Roadmap</label>
                        <div class="mt-1">
                            {{-- Menggunakan style input file yang sudah diperbarui --}}
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none
                                          file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold
                                          file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                                id="gambar_roadmap" name="gambar_roadmap" type="file">
                        </div>
                        @if ($roadmap->gambar_roadmap)
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $roadmap->gambar_roadmap) }}"
                                    class="mt-2 h-40 w-auto rounded-md border p-1">
                            </div>
                        @endif
                    </div>
                    <hr>
                    {{-- Tahap 1 --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahap1_tahun" class="block text-sm font-medium text-gray-700">Tahap 1: Tahun</label>
                            <input type="text" name="tahap1_tahun" id="tahap1_tahun"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
                                value="{{ old('tahap1_tahun', $roadmap->tahap1_tahun) }}">
                        </div>
                        <div>
                            <label for="tahap1_deskripsi" class="block text-sm font-medium text-gray-700">Tahap 1:
                                Deskripsi</label>
                            <textarea name="tahap1_deskripsi" id="tahap1_deskripsi" rows="3"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('tahap1_deskripsi', $roadmap->tahap1_deskripsi) }}</textarea>
                        </div>
                    </div>
                    {{-- Tahap 2 --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahap2_tahun" class="block text-sm font-medium text-gray-700">Tahap 2: Tahun</label>
                            <input type="text" name="tahap2_tahun" id="tahap2_tahun"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
                                value="{{ old('tahap2_tahun', $roadmap->tahap2_tahun) }}">
                        </div>
                        <div>
                            <label for="tahap2_deskripsi" class="block text-sm font-medium text-gray-700">Tahap 2:
                                Deskripsi</label>
                            <textarea name="tahap2_deskripsi" id="tahap2_deskripsi" rows="3"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('tahap2_deskripsi', $roadmap->tahap2_deskripsi) }}</textarea>
                        </div>
                    </div>
                    {{-- Tahap 3 --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahap3_tahun" class="block text-sm font-medium text-gray-700">Tahap 3: Tahun</label>
                            <input type="text" name="tahap3_tahun" id="tahap3_tahun"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3"
                                value="{{ old('tahap3_tahun', $roadmap->tahap3_tahun) }}">
                        </div>
                        <div>
                            <label for="tahap3_deskripsi" class="block text-sm font-medium text-gray-700">Tahap 3:
                                Deskripsi</label>
                            <textarea name="tahap3_deskripsi" id="tahap3_deskripsi" rows="3"
                                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3">{{ old('tahap3_deskripsi', $roadmap->tahap3_deskripsi) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
