@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section>
                        <h1 class="text-4xl font-bold text-jabal-green">Ceramah</h1>
                        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
                    </section>
                    
                    <section class="mb-16">
                        <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                                <div class="md:w-1/2">
                                    <h2 class="text-3xl font-bold text-jabal-green mb-4">Spirit Mensyukuri Ni’mat Kemerdekaan</h2>
                                    <p class="text-gray-600 leading-relaxed text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu magna et sapien volutpat commodo. Ut quis porta arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur interdum efficitur luctus. Curabitur bibendum mattis eros.
                                    </p>
                                    <a href="#" class="mt-6 inline-flex items-center gap-2 bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-jabal-light shadow-lg transition-all hover:shadow-xl">
                                        Kunjungi
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="md:w-1/2">
                                    <img src="https://cdn.kemenag.go.id/storage/posts/16_9/big/1755189885.jpg" alt="Taman Halal" class="rounded-xl shadow-lg w-full h-auto object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <img src="https://cdn.kemenag.go.id/storage/posts/16_9/big/1748575185.jpeg" alt="Masjid" class="w-full h-48 object-cover">
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Kemuliaan Dzulhijjah dan Upaya Meraih Kemabruran Haji</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Kajian</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <img src="https://cdn.kemenag.go.id/storage/posts/16_9/big/1742795072.jpg" alt="Resto Halal" class="w-full h-48 object-cover">
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Meluruskan Makna Fithrah dan Aktualisasinya dalam Kehidupan</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Kajian</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                 <img src="https://cdn.kemenag.go.id/storage/posts/16_9/big/1738312444.jpg" alt="Resto Halal" class="w-full h-48 object-cover">
                               
                                <div class="p-6 flex-grow flex flex-col">
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">Mari Bersahabat dengan Lingkungan</h3>
                                    <a href="#" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">Lihat Kajian</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

@endsection