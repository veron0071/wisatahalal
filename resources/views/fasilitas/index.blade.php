@extends('layouts.app')
@section('title', 'Fasilitas Wisata Halal')

@section('content')

    @if ($fasilitass->isNotEmpty())
        <div x-data="pageData()" class="container mx-auto px-6 md:px-12 py-12">
            <section>
                <h1 class="text-4xl font-bold text-jabal-green">Fasilitas</h1>
                <hr class="mt-4 mb-12 border-jabal-green border-t-2">
            </section>

            <section class="mb-16">
                <template x-if="featured">
                    <div class="bg-white rounded-2xl custom-shadow p-8 md:p-12">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                            <div class="md:w-1/2">
                                <h2 class="text-3xl font-bold text-jabal-green mb-4" x-text="featured.nama_fasilitas"></h2>
                                <p class="text-gray-600 leading-relaxed text-justify" x-text="featured.deskripsi"></p>
                            </div>
                            <div class="md:w-1/2">
                                <template x-if="featured.foto">
                                    <img :src="'/storage/' + featured.foto" :alt="featured.nama_fasilitas"
                                        class="rounded-xl shadow-lg w-full h-auto object-cover">
                                </template>
                            </div>
                        </div>
                    </div>
                </template>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-jabal-green mb-8 text-center">Jelajahi Fasilitas Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($fasilitass as $fasilitas)
                        <div @click="setFeatured({{ $loop->index }})"
                            class="cursor-pointer bg-white rounded-2xl custom-shadow overflow-hidden flex flex-col transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                            @if ($fasilitas->foto)
                                <img src="{{ asset('storage/' . $fasilitas->foto) }}" alt="{{ $fasilitas->nama_fasilitas }}"
                                    class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center"><span
                                        class="text-gray-400">Tidak ada foto</span></div>
                            @endif
                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="text-xl font-bold text-jabal-green mb-4 text-center">
                                    {{ $fasilitas->nama_fasilitas }}</h3>
                                <div
                                    class="mt-auto block w-full bg-white border border-gray-200 text-center text-jabal-green font-semibold px-6 py-2.5 rounded-full">
                                    Lihat Detail</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-12">{{ $fasilitass->links() }}</div>
            </section>
        </div>
    @else
        <div class="container mx-auto px-6 md:px-12 py-12 text-center">
            <h1 class="text-4xl font-bold text-jabal-green">Fasilitas</h1>
            <p class="text-center text-gray-500 mt-8">Belum ada data fasilitas yang bisa ditampilkan.</p>
        </div>
    @endif

    {{-- Script Alpine.js dengan auto-scroll --}}
    <script>
        function pageData() {
            const fasilitass = @json($fasilitass->items());
            return {
                fasilitass: fasilitass,
                featured: fasilitass.length > 0 ? fasilitass[0] : null,
                setFeatured(index) {
                    this.featured = this.fasilitass[index];
                    // Baris ini akan menggeser layar ke atas dengan halus
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            };
        }
    </script>
@endsection
