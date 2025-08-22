@extends('layouts.app')
@section('title', 'Ceramah & Kajian')

@section('content')

    @if ($ceramahs->isNotEmpty())
        <div x-data="pageData()" class="container mx-auto px-6 md:px-12 py-12">
            <section>
                <h1 class="text-4xl font-bold text-jabal-green">Ceramah & Kajian</h1>
                <hr class="mt-4 mb-12 border-jabal-green border-t-2">
            </section>

            <section class="mb-16">
                <template x-if="featured">
                    <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                            <div class="md:w-1/2">
                                <h2 class="text-3xl font-bold text-jabal-green mb-4" x-text="featured.judul"></h2>
                                <p class="text-gray-600 leading-relaxed text-justify" x-html="featured.deskripsi"></p>
                                <a :href="featured.video_url" target="_blank"
                                    class="mt-6 inline-flex items-center gap-2 bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-jabal-light shadow-lg transition-all hover:shadow-xl">
                                    Tonton Kajian di YouTube
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>

                            {{-- PERBAIKAN DI BAGIAN INI --}}
                            <div class="md:w-1/2 w-full">
                                {{-- Div pembungkus ini akan menjaga rasio 16:9 --}}
                                <div class="relative pt-[56.25%] rounded-xl shadow-lg overflow-hidden">
                                    <iframe :src="getEmbedUrl(featured.video_url)"
                                        class="absolute top-0 left-0 w-full h-full" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </template>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Jelajahi Kajian Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($ceramahs as $ceramah)
                        <div @click="setFeatured({{ $loop->index }})"
                            class="cursor-pointer bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            @php
                                $videoId = null;
                                if (
                                    preg_match(
                                        '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/',
                                        $ceramah->video_url,
                                        $match,
                                    )
                                ) {
                                    $videoId = $match[1];
                                }
                            @endphp

                            @if ($videoId)
                                <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg"
                                    alt="{{ $ceramah->judul }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center"><span
                                        class="text-gray-400">Video</span></div>
                            @endif

                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">{{ $ceramah->judul }}</h3>
                                <div
                                    class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full">
                                    Lihat Kajian
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-12">{{ $ceramahs->links() }}</div>
            </section>
        </div>
    @else
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Ceramah & Kajian</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada data ceramah yang bisa ditampilkan.</p>
        </div>
    @endif

    <script>
        function pageData() {
            const ceramahs = @json($ceramahs->items());
            return {
                ceramahs: ceramahs,
                featured: ceramahs.length > 0 ? ceramahs[0] : null,
                setFeatured(index) {
                    this.featured = this.ceramahs[index];
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                },
                getEmbedUrl(url) {
                    if (!url) return '';
                    let videoId = '';
                    try {
                        const urlObj = new URL(url);
                        if (urlObj.hostname === 'youtu.be') {
                            videoId = urlObj.pathname.slice(1);
                        } else if (urlObj.hostname === 'www.youtube.com' || urlObj.hostname === 'youtube.com') {
                            videoId = urlObj.searchParams.get('v');
                        }
                    } catch (e) {
                        // Abaikan jika URL tidak valid
                    }
                    return videoId ? `https://www.youtube.com/embed/${videoId}` : '';
                }
            };
        }
    </script>
@endsection
