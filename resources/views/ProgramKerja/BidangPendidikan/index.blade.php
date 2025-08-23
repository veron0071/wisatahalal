@extends('layouts.app')
@section('title', 'Program Kerja - Bidang Pendidikan dan Pelatihan')

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
                <h2 class="text-2xl font-bold text-jabal-green">Bidang Pendidikan dan Pelatihan</h2>
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
                            <td rowspan="4" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                Bidang Pendidikan dan Pelatihan
                            </td>
                            <td class="px-6 py-4">1. Peningkatan Komunikasi, Informasi dan Edukasi Ekonomi Syariah di Masyarakat Umum dan Lingkungan Pendidikan</td>
                            <td class="px-6 py-4">Pemahaman Masyarakat Umum dan Lingkungan Pendidikan terhadap Perilaku benua ekonomi dan bisnis syariah.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. Pelatihan Hard-Skill Pengurus PD MES Kendal dan Masyarakat Sekitar</td>
                            <td class="px-6 py-4">Peningkatan Hard Skill di setiap individu Pengurus PD MES Kendal, Badan atau Unit Usaha, dan Masyarakat Sekitar secara kualitas dan kuantitas yang diakui secara legal oleh Lembaga Terkait Ekonomi Syariah.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">3. Dialog Interaktif</td>
                            <td class="px-6 py-4">Acara ini digunakan untuk menemukan solusi maupun informasi yang terbaik yang didapat dari narasumber. Dengan adanya informasi tersebut diharapkan bisa menjadi sebuah terobosan atau solusi dalam mengatasi permasalahan yang ada.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">4. Workshop Literasi, Training dan Pelatihan Ekonomi Syariah</td>
                            <td class="px-6 py-4">Agenda ini dilaksanakan untuk meningkatkan literasi dan inklusi ekonomi dan keuangan syariah serta adanya pelatihan langsung tentang mekanisme praktek ekonomi dan keuangan syariah.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection