@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section>
                        <h1 class="text-4xl font-bold text-jabal-green">UMKM Halal</h1>
                        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
                    </section>
                    
                    <section class="mb-16">
                        <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                                <div class="md:w-1/2">
                                    <h2 class="text-3xl font-bold text-jabal-green mb-4">Soto Halal</h2>
                                    <p class="text-gray-600 leading-relaxed text-justify mb-6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu magna et sapien volutpat commodo. Ut quis porta arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur interdum efficitur luctus.
                                    </p>

                                    <div class="mt-6 pt-6 border-t">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pemilik</h4>
                                        <div class="space-y-3 text-gray-600">
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-jabal-green" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span>Ahmad Subarjo</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-jabal-green" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                                                <span>0812-3456-7890</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a href="#" class="mt-8 inline-flex items-center gap-2 bg-jabal-light text-white font-semibold px-6 py-3 rounded-full hover:bg-jabal-green shadow-lg transition-all hover:shadow-xl">
                                        Sertifikasi Halal
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="md:w-1/2">
                                    <img src="https://images.unsplash.com/photo-1569058242253-92a9c5552065?q=80&w=1925&auto=format&fit=crop" alt="Soto Halal" class="rounded-xl shadow-lg w-full h-auto object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-3xl font-bold text-jabal-green mb-8 text-center">Produk UMKM Lainnya</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            </div>
                    </section>
                </div>
@endsection