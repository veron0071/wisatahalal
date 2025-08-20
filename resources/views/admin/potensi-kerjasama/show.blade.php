@extends('layouts.admin')
@section('title', 'Detail Potensi Kerjasama')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail Potensi Kerjasama</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lengkap mengenai potensi kerjasama.</p>
                </div>
                <a href="{{ route('admin.potensi-kerjasama.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Kembali
                </a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Kategori Mitra</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 font-semibold">{{ $item->kategori_mitra }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Mitra Potensial</dt>
                    {{-- Menambahkan class text-justify dan leading-relaxed --}}
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 text-justify leading-relaxed"
                        style="white-space: pre-wrap;">{{ $item->mitra_potensial }}</dd>
                </div>

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Isu/Need Utama</dt>
                    {{-- Menambahkan class text-justify dan leading-relaxed --}}
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 text-justify leading-relaxed"
                        style="white-space: pre-wrap;">{{ $item->isu_need_utama }}</dd>
                </div>

                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nilai Tambah PD MES</dt>
                    {{-- Menambahkan class text-justify dan leading-relaxed --}}
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 text-justify leading-relaxed"
                        style="white-space: pre-wrap;">{{ $item->nilai_tambah_pd_mes }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
