@extends('layouts.app')
@section('title', 'Program Kerja - Pengurus Harian')

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
                <h2 class="text-2xl font-bold text-jabal-green">Pengurus Harian</h2>
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
                            <td rowspan="7" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                Bidang Pengurus Harian
                            </td>
                            <td class="px-6 py-4">1. Dua Bulanan PD MES Kendal</td>
                            <td class="px-6 py-4">Adanya Program Bersama Dewan Pakar atau Dewan Pembina terkait pembahasan tema secara dan adanya rapat koordinasi incidental dengan mengidentifikasi program, timeline agenda, program roadshow pengurus MES Kendal</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">2. Inventarisasi dan kesekertariatan</td>
                            <td class="px-6 py-4">Adanya tertib administrasi surat dan menginventariskan beberapa peralatan dan kelengkapan milik Pengurus Daerah MES Kendal.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">3. Laporan Pemasukan dan Biaya Serta Evaluasi Dana Kegiatan</td>
                            <td class="px-6 py-4">Adanya tertib laporan keuangan dan mengevaluasi beberapa dana yang di dapatkan dari lembaga dan (Sponsorship) untuk kegiatan Pengurus Daerah MES Kendal.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">4. Mengkoordinasikan Program GIS Pesantren</td>
                            <td class="px-6 py-4">Roadshow Pasar Modal Syariah oleh GIS Keuangan PD MES Kendal bekerjasama dengan Kantor Perwakilan Bursa Efek Indonesia (BEI) Jawa Tengah dan Phintraco Sekuritas Cabang Semarang Pengurus Daerah MES Kabupaten Kendal kembali mengajak kerjasama dengan Forum Komunikasi Pondok Pesantren (FKPP) Kabupaten Kendal untuk menambahan kompetensi dan skill para santri dan alumni yang biasa menalikan investor syariah.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">5. Dokumentasi seluruh Administrasi dan Aktivitas Organisasi</td>
                            <td class="px-6 py-4">Dokumentasi seluruh acara dan kegiatan PD Mes Kendal serta aktifitas Organisasi dilaksanakan atas dasar kebutuhan tertib administrasi, tertib dokumentasi acara dan kesekretariatan acara. Adapun penyimpanan berkas kegiatan dan penyimpanan inventarisasi perlengkapan organisasi terdapat di Kantor Sekretariat PD MES Kendal.</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">6. Pendelegasian</td>
                            <td class="px-6 py-4">Pendelegasian setiap perwakilan organisasi dalam keikutsertaan acara, agenda dan aktifitas lainnya dalam pelaksanaan program kerja serta undangan untuk Organisasi.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">7. Tanah Wakaf Gedung Dakwah Ekonomi Islam</td>
                            <td class="px-6 py-4">Pengadaan Tanah Wakaf Gedung Dakwah Ekonomi Islam di inisiasi oleh PD MES Kendal dan selanjutnya diusahakan untuk dibangun agar dapat dimanfaatkan untuk kepentingan Organisasi.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection