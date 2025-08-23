@extends('layouts.app')
@section('title', 'Program Kerja - Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif')

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
                <h2 class="text-2xl font-bold text-jabal-green">Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif</h2>
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
                                Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif
                            </td>
                            <td class="px-6 py-4">1. Pendampingan Usaha Bisnis Syariah</td>
                            <td class="px-6 py-4">Adanya Branding Produk, Kualitas Produk, Sertifikasi Halal dan Market Place.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. Pendampingan Modal Bisnis Syariah</td>
                            <td class="px-6 py-4">Memberikan Pendampingan untuk Bisnis Syariah Islam Memperoleh Pembiayaan untuk Modal usaha.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">3. Kajian Potensi Pariwisata dan Ekonomi Kreatif</td>
                            <td class="px-6 py-4">Memberikan Edukasi dan Literasi kepada Masyarakat Daerah sekitar tempat Pariwisata di Kendal.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection