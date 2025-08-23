@extends('layouts.app')
@section('title', 'Program Kerja - Bidang Kaderisasi')

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
                <h2 class="text-2xl font-bold text-jabal-green">Bidang Kaderisasi</h2>
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
                                Bidang Kaderisasi
                            </td>
                            <td class="px-6 py-4">1. Program Magang MES Kendal</td>
                            <td class="px-6 py-4">Menyediakan Pihak Eksternal yang akan melakukan Magang di Organisasi PD MES Kendal selain itu juga dalam persiapan kaderisasi Pengurus PD MES Kendal di periode berikutnya.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. MES Goes to Campus</td>
                            <td class="px-6 py-4">Pengenalan, sosialisasi dan edukasi MES kepada beberapa mahasiswa dan beberapa organisasi Kampus.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">3. MES Goes to School</td>
                            <td class="px-6 py-4">Pengenalan dan edukasi tentang MES pada Murid Sekolah sehingga mengenal MES sejak dini.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">4. Ngumpul Manfaat</td>
                            <td class="px-6 py-4">Acara ini digunakan untuk menemukan solusi pada permasalahan maupun informasi yang update yang didapat dari narasumber. Dengan adanya informasi tersebut diharapkan bisa menjadi sebuah pembelajaran dan pendidikan tambahan bagi para peserta.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection