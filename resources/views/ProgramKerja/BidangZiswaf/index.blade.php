@extends('layouts.app')
@section('title', 'Program Kerja - Bidang Ziswaf dan CSR')

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
                <h2 class="text-2xl font-bold text-jabal-green">Bidang Ziswaf dan CSR</h2>
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
                            <td rowspan="5" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                Bidang Ziswaf dan CSR
                            </td>
                            <td class="px-6 py-4">1. Kajian ZISWAF</td>
                            <td class="px-6 py-4">Peningkatan literasi ZISWAF (Zakat, Infak, Sedekah, dan Wakaf) di kalangan masyarakat umum dan pelaku usaha.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. Pelatihan ZISWAF</td>
                            <td class="px-6 py-4">Peningkatan kapasitas pengelola lembaga ZISWAF melalui pelatihan manajemen dan tata kelola profesional.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">3. Penyaluran ZISWAF</td>
                            <td class="px-6 py-4">Optimalisasi penyaluran dana ZISWAF untuk program pemberdayaan ekonomi umat yang produktif dan berkelanjutan.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">4. Kerjasama Program CSR</td>
                            <td class="px-6 py-4">Sinergi dengan perusahaan untuk mengarahkan program Corporate Social Responsibility (CSR) pada sektor ekonomi syariah.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">5. Penerbitan Konten ZISWAF</td>
                            <td class="px-6 py-4">Edukasi masyarakat melalui penerbitan konten kreatif dan informatif mengenai ZISWAF di berbagai platform media.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection