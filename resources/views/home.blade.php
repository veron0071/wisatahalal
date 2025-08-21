@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')
    <section>
        <div class="relative bg-cover bg-center text-white text-center py-20 md:py-28 px-6 overflow-hidden"
            style="background-image: url('https://unwahas.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-27-at-14.34.32-scaled.jpeg');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10">
                <h1 class="text-3xl md:text-4xl font-bold">Selamat Datang di Wisata Halal Jabal Nur</h1>
                <p class="max-w-2xl mx-auto mt-3">Eksplorasi kekayaan ulama, UMKM, dan fasilitas di sekitar Jabal Nur dengan
                    mudah dan nyaman.</p>
                <a href="#about"
                    class="mt-6 inline-block bg-white text-jabal-green font-semibold px-8 py-3 rounded-full shadow-md hover:bg-gray-100 transition-transform hover:-translate-y-1">Mulai
                    Explorasi</a>
            </div>
        </div>
    </section>

    <div id="about" class="container mx-auto px-6 md:px-12 py-16">
        <hr class="border-jabal-green border-t-2">
        <section class="pt-16 pb-12">
            <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-jabal-green">Selayang Pandang</h2>
                    <h3 class="text-xl font-semibold text-gray-700 mt-1">Pengurus Daerah Masyarakat Ekonomi Syariah</h3>
                    <p class="text-lg text-gray-600">Kabupaten Kendal</p>
                    <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                </div>
                <div class="max-w-4xl mx-auto text-center text-gray-700 space-y-6">
                    <p class="leading-relaxed">
                        Perkumpulan Masyarakat Ekonomi Syariah (MES) merupakan organisasi nirlaba yang bertujuan
                        mengembangkan dan membumikan ekonomi syariah sebagai sistem ekonomi yang berkeadilan dan berdasarkan
                        prinsip-prinsip syariah... (dan seterusnya).
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
