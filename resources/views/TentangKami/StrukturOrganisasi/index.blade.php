@extends('layouts.app')
@section('title', 'Struktur Organisasi MES Kendal')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Struktur Organisasi Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        <section class="pb-12">
            <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-jabal-green">Struktur Organisasi</h2>
                    <p class="text-lg font-semibold text-gray-700 mt-2">SUSUNAN PENGURUS DAERAH MASYARAKAT EKONOMI SYARIAH</p>
                    <p class="text-md text-gray-600">KABUPATEN KENDAL PERIODE 1446-1451 H / 2024-2029 M</p>
                    <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                </div>

                <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-8">

                    <div>
                        <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">A. DEWAN PEMBINA</h3>
                        <div class="space-y-2 pl-4">
                            <p><strong class="font-semibold w-28 inline-block">Ketua</strong>: KH. M. Nasyih Syarifuddin</p>
                            <p><strong class="font-semibold w-28 inline-block">Wakil Ketua</strong>: KH. Basyar Rohman, SHI, MSi</p>
                            <div class="flex">
                                <strong class="font-semibold w-28 inline-block shrink-0">Anggota</strong>:
                                <ul class="list-disc list-outside pl-5">
                                    <li>KH. Ahmad Yusro Mubarok</li>
                                    <li>Drs. H. Cahyanto, MM</li>
                                    <li>Izzuddin Latif, SH, MH</li>
                                    <li>Alfebian Yulando, ST, MA</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">B. DEWAN PAKAR</h3>
                        <div class="space-y-2 pl-4">
                            <p><strong class="font-semibold w-28 inline-block">Ketua</strong>: Prof. Dr. H. Abdul Ghofur, MAg</p>
                            <p><strong class="font-semibold w-28 inline-block">Wakil Ketua</strong>: Dr. Nur Fatoni, MAg</p>
                            <div class="flex">
                                <strong class="font-semibold w-28 inline-block shrink-0">Anggota</strong>:
                                <ul class="list-disc list-outside pl-5">
                                    <li>Dr. Ali Murtadho, MAg</li>
                                    <li>Dr. KH Ahmad Tantowi, MSi, MPd</li>
                                    <li>Ubaidul Musthofa, SHI, MSi</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">C. BADAN PENGURUS HARIAN</h3>
                        <div class="space-y-2 pl-4">
                            <p><strong class="font-semibold w-32 inline-block">Ketua Umum</strong>: M. Irkham Fukhuludin, SEI. CWC.</p>
                            <p><strong class="font-semibold w-32 inline-block">Sekretaris Umum</strong>: M. Fatchurrohman, SHI, ME.</p>
                            <p><strong class="font-semibold w-32 inline-block">Sekretaris I</strong>: Muhammad Azmi Syafiq, SH, MH.</p>
                            <p><strong class="font-semibold w-32 inline-block">Sekretaris II</strong>: Bayu Anggoro Husodo, SPd</p>
                            <p><strong class="font-semibold w-32 inline-block">Bendahara Umum</strong>: Iqbal Sarayulus Nuh, SM</p>
                            <p><strong class="font-semibold w-32 inline-block">Bendahara I</strong>: Ririn Inamatussolihah.</p>
                            <p><strong class="font-semibold w-32 inline-block">Bendahara II</strong>: Mayya Shofa Mahfud, MPd.</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">D. BIDANG-BIDANG</h3>
                        <div class="space-y-6 pl-4">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">1. Bidang ZISWAF</h4>
                                <div class="pl-4 mt-2 space-y-1">
                                    <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Charlie Ibrahim Noech, SE.</p>
                                    <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: 
                                        <ul class="list-disc list-outside pl-5">
                                            <li>Zuniar Dewi Karisa</li>
                                            <li>M. Aslam Izzulhaq</li>
                                            <li>M. Fahmi Yusuf</li>
                                            <li>Muhamad Sukron</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">2. Bidang Penelitian dan Pengembangan Ekonomi Syariah</h4>
                                <div class="pl-4 mt-2 space-y-1">
                                    <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Anathul Mualifah, SE.</p>
                                    <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: 
                                        <ul class="list-disc list-outside pl-5">
                                            <li>Zahrina Maulida</li>
                                            <li>Najib Nurul Anam</li>
                                            <li>Rismanda Nafikatu Rizqo</li>
                                            <li>Shella Putri Mahardani</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- (Lanjutkan untuk bidang-bidang lainnya dengan format yang sama) --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection