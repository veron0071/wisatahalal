@extends('layouts.app')
@section('title', 'Visi & Misi MES Kendal')

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
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Kategori Mitra</th>
                                <th scope="col" class="px-6 py-3">Mitra Potensial</th>
                                <th scope="col" class="px-6 py-3">Isu/Need Utama</th>
                                <th scope="col" class="px-6 py-3">Usulan Visi/Misi PD MES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Pemerintah Daerah (OPD)</td>
                                <td class="px-6 py-4">Pemda Kendal, Bappeda, Dinkop-UMKM, Disperindag, Dinas Pariwisata, Dinas Pertanian, Dinas Perikanan & Pendidikan, Diskominfo</td>
                                <td class="px-6 py-4">Peningkatan kinerja ekonomi syariah, sertifikasi halal, pemberdayaan UMKM, pariwisata & ekonomi kreatif, dan program google</td>
                                <td class="px-6 py-4">Visi : program sinergitas, LKS syariah, potensi pariwisata, pelatihan UMKM</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">BUMD, BUMN & Perusahaan</td>
                                <td class="px-6 py-4">Perusda, Kawasan industri, perusahaan swasta/asing, logistik, CSR, BUMN, BUMD</td>
                                <td class="px-6 py-4">Pemberdayaan masyarakat, penguatan CSR, pemasaran berbasis riset, sertifikasi halal</td>
                                <td class="px-6 py-4">Kemitraan program, CSR ZISWAF produktif, Kuras pasmasok halal</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Otoritas & Badan Nasional</td>
                                <td class="px-6 py-4">OJK, Bank Indonesia (BI), Kemenag, Kemenkop, OMMD, Badan Penyelenggara Jaminan Produk Halal (BPJPH), Badan Standardisasi Instrumen (GSN), Komite SNI, Badan Wakaf Indonesia (BWI)</td>
                                <td class="px-6 py-4">Regulasi & pengawasan, akselerasi inklusi keuangan syariah, penguatan UMKM, standardisasi produk, pengembangan wakaf</td>
                                <td class="px-6 py-4">Sinkronisasi kebijakan pusat-daerah, fasilitasi akses program nasional, penguatan standardisasi, pemberdayaan kelembagaan</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Lembaga Keuangan Syariah</td>
                                <td class="px-6 py-4">Bank syariah (BUS, BPD), BPRS, KSPPS, BMT, asuransi syariah, sekuritas, pegadaian syariah, pialang syariah</td>
                                <td class="px-6 py-4">Sosialisasi dan Workshop literasi dan inklusi keuangan syariah, penyaluran pembiayaan berkualitas</td>
                                <td class="px-6 py-4">Cluster UMKM berforma, skema pembiayaan syariah, forum diskusi</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">ZISWAF & Filantropi</td>
                                <td class="px-6 py-4">BAZNAS, LAZ, BWI/LKS-PWU, filantropi perusahaan</td>
                                <td class="px-6 py-4">Penyaluran efektif & berdampak, production mustahik</td>
                                <td class="px-6 py-4">Sinergi ZISWAF produktif, BWIWAF komersial</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Pendidikan (Riset & SDM)</td>
                                <td class="px-6 py-4">Kampus, SMA, Pesantren, BLK, inkubator bisnis</td>
                                <td class="px-6 py-4">Kurikulum vokasi, magang industri, riset kebijakan/produk halal</td>
                                <td class="px-6 py-4">Pengembangan kurikulum, jejaring industri/LPT</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Komunitas & Ormas</td>
                                <td class="px-6 py-4">Kafein/Apindo, HIPMI, Dekranasda, komunitas wirausaha, ormas keagamaan</td>
                                <td class="px-6 py-4">Pembinaan Ekosistem Halal, Literasi Bisnis Syariah</td>
                                <td class="px-6 py-4">Sinergi dakwah, pelatihan tematik</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Teknologi & Platform</td>
                                <td class="px-6 py-4">Fintech syariah (termasuk market place), payment gateway, logistik</td>
                                <td class="px-6 py-4">Akselerasi, akses market, pembiayaan</td>
                                <td class="px-6 py-4">Advokasi/reg, digital, integrasi pembiayaan</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-medium text-gray-900">Lembaga Standar & Akreditasi Syariah</td>
                                <td class="px-6 py-4">BPJPH, LPPOM MUI, Dinas Kesehatan, DSN-MUI, BSN</td>
                                <td class="px-6 py-4">Kepastian halal, mutu, kesesuaian pangan/obat/kosmetika</td>
                                <td class="px-6 py-4">Otoritas proses sertifikasi, audit resilience</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        
    </div>

@endsection

