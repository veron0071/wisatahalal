@extends('layouts.app')
@section('title', 'Galeri Video')

@section('content')

    @if ($videos->isNotEmpty())
        <div x-data="pageData()" class="container mx-auto px-6 md:px-12 py-12">
            <section>
                <h1 class="text-4xl font-bold text-jabal-green">Video Kajian</h1>
                <hr class="mt-4 mb-12 border-jabal-green border-t-2">
            </section>
            
            <section class="mb-16">
                <template x-if="featured">
                    <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                            <div class="md:w-1/2">
                                <h2 class="text-3xl font-bold text-jabal-green mb-4" x-text="featured.judul"></h2>
                                <p class="text-gray-600 leading-relaxed text-justify" x-html="featured.deskripsi"></p>
                                <a :href="featured.video_url" target="_blank" class="mt-6 inline-flex items-center gap-2 bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-jabal-light shadow-lg transition-all hover:shadow-xl">
                                    Tonton Video di YouTube
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" /></svg>
                                </a>
                            </div>
                            <div class="md:w-1/2">
                                {{-- Gambar Unggulan ini di-handle oleh Alpine.js --}}
                                <img :src="getYouTubeThumbnail(featured.video_url) || 'https://via.placeholder.com/400x250.png?text=Tidak+Ada+Video'" 
                                     :alt="featured.judul" class="rounded-xl shadow-lg w-full h-auto object-cover aspect-video">
                            </div>
                        </div>
                    </div>
                </template>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Jelajahi Video Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    @foreach ($videos as $video)
                        <div @click="setFeatured({{ $video->toJson() }})" class="cursor-pointer bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            
                            @if ($video->youtube_thumbnail_url)
                                <img src="{{ $video->youtube_thumbnail_url }}" alt="{{ $video->judul }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center"><span class="text-gray-400">Tidak ada thumbnail</span></div>
                            @endif

                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">{{ $video->judul }}</h3>
                                <a href="{{ $video->video_url }}" target="_blank" class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-green hover:text-white transition-colors">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-12">{{ $videos->links() }}</div>
            </section>
        </div>
    @else
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Video Kajian</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada data video yang bisa ditampilkan.</p>
        </div>
    @endif

    <script>
        function pageData() {
            const videos = @json($videos->items());
            return {
                videos: videos,
                featured: videos.length > 0 ? videos[0] : null,
                
                getYouTubeThumbnail(url) {
                    if (!url) return null;
                    const regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#\&\?]*).*/;
                    const match = url.match(regExp);
                    const videoId = (match && match[2].length === 11) ? match[2] : null;
                    return videoId ? `https://i.ytimg.com/vi/${videoId}/hqdefault.jpg` : null;
                },

                setFeatured(videoJson) {
                    this.featured = videoJson;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            };
        }
    </script>
@endsection