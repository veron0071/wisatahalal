@extends('layouts.app')
@section('title', 'Profil MES Kendal')
@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Tentang Kami</h1>
            <p class="text-gray-500 mt-1">Profil Pengurus Daerah Masyarakat Ekonomi Syariah (MES) Kendal</p>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        @if ($profil)
            <section class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-jabal-green">Selayang Pandang</h2>
                    ...
                </div>

                <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-6">
                    {{-- Menggunakan nl2br() agar baris baru dari textarea ditampilkan sebagai <br> --}}
                    <div class="leading-relaxed text-justify">{!! nl2br(e($profil->pendahuluan)) !!}</div>

                    <div class="pt-6 mt-8 border-t">
                        <h4 class="text-2xl font-bold text-jabal-green mb-4">Tujuan dan Manfaat</h4>
                        <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->tujuan_manfaat)) !!}</div>
                    </div>

                    <div class="pt-6 mt-8 border-t">
                        <h4 class="text-2xl font-bold text-jabal-green mb-4">Target</h4>
                        <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->target)) !!}</div>
                    </div>

                    <div class="pt-6 mt-8 border-t">
                        <h4 class="text-2xl font-bold text-jabal-green mb-4">Legal Formal</h4>
                        <div class="prose max-w-none text-gray-600">{!! nl2br(e($profil->legal_formal)) !!}</div>
                    </div>
                </div>
            </section>
        @else
            <p>Konten belum tersedia.</p>
        @endif
    </div>
@endsection
