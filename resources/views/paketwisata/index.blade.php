@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section>
                        <h1 class="text-4xl font-bold text-jabal-green">Paket Wisata</h1>
                        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
                    </section>

                    <section>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <img src="https://angkasatourtravel.com/wp-content/uploads/2024/12/TOUR-JAWA-BALI-TOUR-angkasa-tour-2025.jpg" alt="Masjid" class="w-full h-48 object-cover">
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Paket 1</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <img src="https://angkasatourtravel.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-02-at-11.09.57-1.jpeg" alt="Resto Halal" class="w-full h-48 object-cover">
                                
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Paket 2</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <img src="https://angkasatourtravel.com/wp-content/uploads/2023/07/padang-2023.jpg" alt="Resto Halal" class="w-full h-48 object-cover">
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Paket 3</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

@endsection