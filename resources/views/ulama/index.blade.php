@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section class="mb-12">
                        <h1 class="text-4xl font-bold text-jabal-green text-center">Sejarah Ulama</h1>
                        <p class="text-center text-gray-500 mt-2">Mengenal Tokoh-tokoh Berpengaruh di Kawasan Jabal Nur</p>
                    </section>
            
                    <section class="bg-white rounded-2xl custom-shadow p-8 md:p-12 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
                        <div class="md:w-3/5 text-gray-600">
                            <h2 class="text-3xl font-bold text-jabal-green mb-4">Ulama 0</h2>
                            <p class="text-base leading-relaxed text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu magna et sapien volutpat commodo. Ut quis porta arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur interdum efficitur luctus. Curabitur bibendum mattis eros. Sed auctor, dui id sollicitudin fringilla, est enim sodales ipsum, et pharetra erat lorem pulvinar lorem. Curabitur condimentum mi sed sollicitudin pharetra. Praesent interdum mauris at dapibus mollis.
                            </p>
                        </div>
                        <div class="md:w-2/5 flex justify-center">
                            <img src="https://www.paramountshop.com/cdn/shop/files/spongebob-squarepants-life-sized-cardboard-cutout-standee-725187_750x.jpg?v=1718292084" alt="Ilustrasi Ulama Unggulan" class="rounded-lg shadow-lg object-cover w-full max-w-xs">
                        </div>
                    </section>
            
                    <section class="mt-16">
                        <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Daftar Ulama Lainnya</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-8">
                            
                            <div class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <div style="background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSpUS6CA_897G3KUknO6uYpDhXNWyXjpDz8cHR9Sq1i9gXWkDFE2r0uQizHANf5d8b8j6CAYWn8idK7CNBeLvhYTzNU2RNjauB5O2juJxjpWg');" class="bg-cover bg-center h-40 rounded-md mb-4">
                                </div>
                                <p class="font-semibold text-jabal-green">Ulama 1</p>
                            </div>
                            
                            <div class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                                <p class="font-semibold text-jabal-green">Ulama 2</p>
                            </div>
            
                            <div class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                                <p class="font-semibold text-jabal-green">Ulama 3</p>
                            </div>
            
                            <div class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                                <p class="font-semibold text-jabal-green">Ulama 4</p>
                            </div>
            
                            <div class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                                <p class="font-semibold text-jabal-green">Ulama 5</p>
                            </div>
                        </div>
                    </section>
                </div>
                @endsection
