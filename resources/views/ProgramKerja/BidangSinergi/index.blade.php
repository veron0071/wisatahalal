@extends('layouts.app')
@section('title', 'Program Kerja - Bidang Sinergi Antar Lembaga')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Program Kerja</h1>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Konten Tabel dalam Kartu --}}
        <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8">
            
            {{-- Judul untuk tabel ini --}}
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-jabal-green">Bidang Sinergi Antar Lembaga dan Komunitas</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Komite Bidang</th>
                            <th scope="col" class="px-6 py-3">Program Kerja</th>
                            <th scope="col" class="px-6 py-3">Tujuan Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td rowspan="3" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                Bidang Sinergi Antar Lembaga Dan Komunitas
                            </td>
                            <td class="px-6 py-4">1. Penyusunan Company Profile</td>
                            <td class="px-6 py-4">Media Pengenalan dan Kerjasama Program Kerja.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. Silaturohim dan Audiensi</td>
                            <td class="px-6 py-4">Silaturrohim dan Audiensi dengan, Bupati Kendal, Pemerintah Daerah dan Instansi Lainnya.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">3. Audiensi Kerjasama Wartawan</td>
                            <td class="px-6 py-4">Melakukan Penawaran Kerjasama dengan Organisasi Wartawan di Daerah Kendall.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection