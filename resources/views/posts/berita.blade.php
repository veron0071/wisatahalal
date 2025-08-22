@extends('layouts.app')
@section('title', 'Berita Terbaru')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-12">
        @if ($posts->isNotEmpty())
            <div x-data="pageData()" class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <main class="lg:col-span-8">
                    <template x-if="featured">
                        <div>
                            <p class="text-sm font-semibold text-jabal-green uppercase tracking-wider"
                                x-text="featured.kategori"></p>
                            <h1 class="text-4xl font-bold text-gray-800 mt-2" x-text="featured.judul"></h1>
                            <p class="text-gray-500 mt-3">
                                written by <strong>Admin</strong> | <span
                                    x-text="new Date(featured.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })"></span>
                            </p>
                            <div class="mt-6">
                                <template x-if="featured.foto">
                                    <img :src="'/storage/' + featured.foto" :alt="featured.judul"
                                        class="w-full h-auto rounded-xl shadow-lg object-cover">
                                </template>
                            </div>
                            <div class="mt-8 prose max-w-none text-justify leading-relaxed text-gray-600"
                                x-html="featured.isi.replace(/\n/g, '<br>')"></div>
                        </div>
                    </template>
                </main>

                <aside class="lg:col-span-4">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-2xl custom-shadow p-6">
                            <h3 class="font-bold text-lg text-gray-800 border-b pb-2 mb-4">RECENT POSTS</h3>
                            <div class="space-y-4">
                                <template x-for="post in posts" :key="post.id">
                                    <div @click="featured = post" class="flex items-center gap-4 cursor-pointer group">
                                        <template x-if="post.foto">
                                            <img :src="'/storage/' + post.foto"
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
                <h2 class="text-2xl font-semibold text-gray-700">Belum Ada Berita</h2>
                <p class="text-gray-500 mt-2">Saat ini belum ada berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>

    <script>
        function pageData() {
            // Pesan ini akan muncul di Console jika Alpine.js berhasil diinisialisasi
            console.log('Komponen Alpine.js untuk halaman Berita sedang diinisialisasi...');

            const initialData = @json($posts);

            return {
                posts: initialData.data,
                featured: initialData.data.length > 0 ? initialData.data[0] : null,
                currentPage: initialData.current_page,
                lastPage: initialData.last_page,
                isLoading: false,

                // Di dalam function pageData(), ganti isi loadMore() menjadi ini:

                async loadMore() {
                    // Hapus atau beri komentar pada alert agar tidak mengganggu
                    // alert('Tombol "Muat Lebih Banyak" berhasil diklik!');

                    console.log('Mencoba memuat lebih banyak...');
                    console.log('Nilai Halaman Saat Ini (currentPage):', this.currentPage);
                    console.log('Nilai Halaman Terakhir (lastPage):', this.lastPage);

                    if (this.isLoading || this.currentPage >= this.lastPage) {
                        console.log('PROSES DIHENTIKAN: Kondisi terpenuhi (mungkin sudah di halaman terakhir).');
                        return;
                    }

                    this.isLoading = true;
                    const nextPage = this.currentPage + 1;
                    console.log('Meminta data untuk halaman:', nextPage);

                    try {
                        const response = await fetch(`{{ route('api.berita.loadmore') }}?page=${nextPage}`);
                        const newData = await response.json();

                        this.posts.push(...newData.data);
                        this.currentPage = newData.current_page;
                        console.log('Sukses! Halaman saat ini diperbarui menjadi:', this.currentPage);

                    } catch (error) {
                        console.error('Gagal memuat data:', error);
                        alert('Terjadi error saat memuat data. Cek console untuk detail.');
                    } finally {
                        this.isLoading = false;
                    }
                }
            };
        }
    </script>
@endsection
