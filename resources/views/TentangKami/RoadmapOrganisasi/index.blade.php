@extends('layouts.app')
@section('title', 'Roadmap Organisasi')

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">
        
        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Roadmap Organisasi Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Konten Roadmap dalam Kartu --}}
        <section class="pb-12">
            <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-jabal-green">Roadmap Organisasi</h2>
                    <p class="text-lg text-gray-600 mt-1">Masyarakat Ekonomi Syariah</p>
                    <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                </div>

                {{-- Gambar Roadmap --}}
                <div class="mb-12">
                    <img src="{{ asset('images/roadmap.jpg') }}" alt="Roadmap Organisasi" class="w-full max-w-4xl mx-auto rounded-lg shadow-lg object-cover h-64">
                </div>

                {{-- Tahapan Roadmap --}}
                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="border-t-4 border-jabal-green pt-4">
                        <h3 class="text-2xl font-bold text-jabal-green">2021 - 2023</h3>
                        <p class="text-gray-600 mt-2">
                            Mendukung Indonesia menjadi pusat ekonomi dan keuangan syariah dunia.
                        </p>
                    </div>

                    <div class="border-t-4 border-jabal-green pt-4">
                        <h3 class="text-2xl font-bold text-jabal-green">2024 - 2027</h3>
                        <p class="text-gray-600 mt-2">
                            Memperkuat kontribusi ekonomi dan keuangan syariah dalam perekonomian nasional.
                        </p>
                    </div>

                    <div class="border-t-4 border-jabal-green pt-4">
                        <h3 class="text-2xl font-bold text-jabal-green">2028 - 2030</h3>
                        <p class="text-gray-600 mt-2">
                            Mendorong implementasi sistem ekonomi dan keuangan syariah yang menyeluruh.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

@endsection