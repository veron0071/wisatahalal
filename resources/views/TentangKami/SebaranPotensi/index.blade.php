@extends('layouts.app')
@section('title', 'Sebaran Potensi Kerjasama')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Sebaran Potensi Kerjasama</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Konten Tabel dalam Kartu --}}
        <section class="pb-12">
            <div class="bg-white p-6 md:p-8 rounded-2xl custom-shadow">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">Kategori Mitra</th>
                                <th scope="col" class="px-6 py-3">Mitra Potensial</th>
                                <th scope="col" class="px-6 py-3">Isu/Need Utama</th>
                                <th scope="col" class="px-6 py-3">Nilai Tambah PD MES</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Perulangan untuk menampilkan setiap baris data --}}
                            @forelse ($items as $item)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $item->kategori_mitra }}</td>
                                    <td class="px-6 py-4">{!! nl2br(e($item->mitra_potensial)) !!}</td>
                                    <td class="px-6 py-4">{!! nl2br(e($item->isu_need_utama)) !!}</td>
                                    <td class="px-6 py-4">{!! nl2br(e($item->nilai_tambah_pd_mes)) !!}</td>
                                </tr>
                            @empty
                                <tr class="bg-white border-b">
                                    <td colspan="4" class="px-6 py-4 text-center">
                                        Belum ada data potensi kerjasama.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>

@endsection
