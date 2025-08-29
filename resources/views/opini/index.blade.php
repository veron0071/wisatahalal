@extends('layouts.app')
@section('title', 'Opini & Berita Terkini')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama (Disesuaikan gayanya) --}}
        <section class="text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Opini & Berita</h1>
            <p class="text-gray-500 mt-2">Wawasan dan informasi terkini dari Masyarakat Ekonomi Syariah Kendal.</p>
            <hr class="mt-8 mb-12 border-jabal-green border-t-2 w-24 mx-auto">
        </section>

        @if ($posts->isNotEmpty())
            <div x-data="pageData()" class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <main class="lg:col-span-8">
                    <template x-if="featured">
                        <div>
                            <p class="text-sm font-semibold text-jabal-green uppercase tracking-wider"
                                x-text="featured.kategori"></p>
                            <h1 class="text-4xl font-bold text-gray-800 mt-2" x-text="featured.judul"></h1>
                            <p class="text-gray-500 mt-3">
                                Ditulis oleh <strong>Admin</strong> | <span
                                    x-text="new Date(featured.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })"></span>
                            </p>
                            <div class="mt-6">
                                <template x-if="featured.foto_url">
                                    <img :src="featured.foto_url" :alt="featured.judul"
                                        class="w-full h-auto rounded-xl shadow-lg object-cover">
                                </template>
                            </div>
                            <div class="mt-8 prose max-w-none text-justify leading-relaxed text-gray-600"
                                x-html="featured.isi.replace(/\n/g, '<br>')"></div>

                            <template x-if="featured.file_url">
                                <a :href="featured.file_url" target="_blank"
                                    class="mt-8 inline-flex items-center justify-center gap-2 w-full bg-jabal-green text-white font-semibold px-6 py-3 rounded-full hover:bg-opacity-90 transition-colors">
                                    Unduh Dokumen Lampiran
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </template>
                        </div>
                    </template>
                </main>

                <aside class="lg:col-span-4">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-2xl custom-shadow p-6">
                            <h3 class="font-bold text-lg text-gray-800 border-b pb-2 mb-4">POSTINGAN LAINNYA</h3>
                            <div class="space-y-4">
                                <template x-for="post in posts" :key="post.id">
                                    <div @click="featured = post" class="flex items-center gap-4 cursor-pointer group">
                                        <template x-if="post.foto_url">
                                            <img :src="post.foto_url"
                                                class="w-20 h-20 rounded-lg object-cover flex-shrink-0"
                                                :alt="post.judul">
                                        </template>
                                        <div>
                                            <p class="font-semibold text-gray-700 group-hover:text-jabal-green transition-colors"
                                                x-text="post.judul"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <div class="mt-6" x-show="currentPage < lastPage">
                                <button @click="loadMore()" :disabled="isLoading"
                                    class="w-full bg-jabal-green text-center text-white font-semibold px-6 py-2.5 rounded-full hover:bg-jabal-light transition-colors disabled:bg-gray-400">
                                    <span x-show="!isLoading">Muat Lebih Banyak</span>
                                    <span x-show="isLoading">Memuat...</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        @else
            <div class="text-center py-16">
                <h2 class="text-2xl font-semibold text-gray-700">Belum Ada Postingan</h2>
                <p class="text-gray-500 mt-2">Saat ini belum ada opini atau berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>

    <script>
        function pageData() {
            const initialData = @json($posts);
            return {
                posts: initialData.data,
                featured: initialData.data.length > 0 ? initialData.data[0] : null,
                currentPage: initialData.current_page,
                lastPage: initialData.last_page,
                isLoading: false,

                async loadMore() {
                    if (this.isLoading || this.currentPage >= this.lastPage) return;
                    this.isLoading = true;
                    const nextPage = this.currentPage + 1;
                    try {
                        const response = await fetch(
                        `{{-- Sesuaikan nama rute jika perlu --}}{{ route('opini.index') }}?page=${nextPage}`, {
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });
                        if (!response.ok) throw new Error('Network response was not ok');
                        const newData = await response.json();

                        this.posts.push(...newData.data);
                        this.currentPage = newData.current_page;
                    } catch (error) {
                        console.error('Gagal memuat data:', error);
                    } finally {
                        this.isLoading = false;
                    }
                }
            };
        }
    </script>
@endsection
