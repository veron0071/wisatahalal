<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="h-full font-sans">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-100">

        <aside
            class="fixed inset-y-0 left-0 z-30 w-64 bg-gray-800 text-white transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0 flex flex-col"
            :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }"
            @click.away="sidebarOpen = false" x-cloak>
            <div class="h-16 flex items-center justify-center text-xl font-bold border-b border-gray-700 flex-shrink-0">
                <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-gray-300 transition-colors">Admin
                    Panel</a>
            </div>
            <nav class="flex-1 px-2 py-4 space-y-1 overflow-y-auto">
                @php
                    $menuItems = [
                        'dashboard' => ['icon' => 'bi-grid-1x2', 'label' => 'Dashboard', 'route' => 'admin.dashboard'],

                        'home-setting' => [
                            'icon' => 'bi-house',
                            'label' => 'Pengaturan Home',
                            'route' => 'admin.home-setting.edit',
                        ],

                        'tentang-kami' => [
                            'icon' => 'bi-info-circle',
                            'label' => 'Tentang Kami',
                            'children' => [
                                'profil-lembaga' => [
                                    'label' => 'Profil MES Kendal',
                                    'route' => 'admin.profil-lembaga.edit',
                                ],
                                'visi-misi' => ['label' => 'Visi Misi', 'route' => 'admin.visi-misi.edit'],
                                'struktur-organisasi' => [
                                    'label' => 'Struktur Organisasi',
                                    'route' => 'admin.struktur-organisasi.edit',
                                ],
                                'roadmap' => ['label' => 'Roadmap Organisasi', 'route' => 'admin.roadmap.edit'],
                                'potensi-kerjasama' => [
                                    'label' => 'Potensi Kerjasama',
                                    'route' => 'admin.potensi-kerjasama.index',
                                ],
                            ],
                        ],

                        'program-kerja' => [
                            'icon' => 'bi-kanban',
                            'label' => 'Program Kerja',
                            'route' => 'admin.program-kerja.index',
                        ],

                        'galeri' => [
                            'icon' => 'bi-images',
                            'label' => 'Galeri Kegiatan',
                            'route' => 'admin.galeri.index',
                        ],

                        'publikasi' => [
                            'icon' => 'bi-book-half',
                            'label' => 'Publikasi',
                            'route' => 'admin.publikasi.index',
                        ],
                        'ekosistem-halal' => [
                            'icon' => 'bi-bounding-box-circles',
                            'label' => 'Ekosistem Halal',
                            'children' => [
                                'gis-pesantren' => [
                                    'label' => 'Galeri Pesantren',
                                    'route' => 'admin.gis-pesantren.index',
                                ],
                                'kawasan-wisata-halal' => [
                                    'label' => 'Kawasan Wisata Halal',
                                    'route' => 'admin.kawasan-wisata-halal.index',
                                ],
                                'sertifikasi-halal' => [
                                    'label' => 'Sertifikasi Produk Halal',
                                    'route' => 'admin.sertifikasi-halal.edit',
                                ],
                                'industri-keuangan-syariah' => [
                                    'label' => 'Industri Keuangan Syariah',
                                    'route' => 'admin.industri-keuangan-syariah.index',
                                ],
                                'komunitas-investor-halal' => [
                                    'label' => 'Komunitas Investor Halal',
                                    'route' => 'admin.komunitas-investor-halal.edit',
                                ],
                                'komunitas-umkm-halal' => [
                                    'label' => 'Komunitas UMKM Halal',
                                    'route' => 'admin.komunitas-umkm-halal.edit',
                                ],
                            ],
                        ],
                        'opini-berita' => [
                            'icon' => 'bi-newspaper',
                            'label' => 'Opini & Berita',
                            'route' => 'admin.opini-berita.index',
                        ],
                        // 'ekosistem-halal' => [
                        //     'icon' => 'bi-bounding-box-circles',
                        //     'label' => 'Ekosistem Halal',
                        //     'route' => 'admin.ekosistem-halal.index',
                        // ],
                        // 'posts' => ['icon' => 'bi-pin-angle-fill', 'label' => 'Posts', 'route' => 'admin.posts.index'],
                        // 'ulama' => [
                        //     'icon' => 'bi-person-lines-fill',
                        //     'label' => 'Data Ulama',
                        //     'route' => 'admin.ulama.index',
                        // ],
                        // 'fasilitas' => [
                        //     'icon' => 'bi-building',
                        //     'label' => 'Data Fasilitas',
                        //     'route' => 'admin.fasilitas.index',
                        // ],
                        // 'umkm' => ['icon' => 'bi-shop', 'label' => 'Data UMKM', 'route' => 'admin.umkm.index'],
                        // 'ceramahs' => [
                        //     'icon' => 'bi-mic',
                        //     'label' => 'Ceramah & Kajian',
                        //     'route' => 'admin.ceramahs.index',
                        // ],
                        // 'ziarahs' => [
                        //     'icon' => 'bi-geo-alt',
                        //     'label' => 'Lokasi Ziarah',
                        //     'route' => 'admin.ziarahs.index',
                        // ],
                        // 'videos' => ['icon' => 'bi-play-btn', 'label' => 'Video', 'route' => 'admin.videos.index'],
                        // 'paketwisatas' => [
                        //     'icon' => 'bi-backpack',
                        //     'label' => 'Paket Wisata',
                        //     'route' => 'admin.paketwisatas.index',
                        // ],

                        // Refrensi Awal, Revisi sesuai kebutuhan
                        // 'sertifikasis' => [
                        //     'icon' => 'bi-award',
                        //     'label' => 'Sertifikasi Halal',
                        //     'route' => 'admin.sertifikasis.index',
                        // ],
                        // 'manuskrips' => [
                        //     'icon' => 'bi-journal-bookmark',
                        //     'label' => 'Arsip Manuskrip',
                        //     'route' => 'admin.manuskrips.index',
                        // ],
                        // 'stakeholders' => [
                        //     'icon' => 'bi-people',
                        //     'label' => 'Stakeholders',
                        //     'route' => 'admin.stakeholders.index',
                        // ],
                    ];
                @endphp

                @foreach ($menuItems as $key => $item)
                    {{-- Jika item punya sub-menu (children) --}}
                    @if (isset($item['children']))
                        @php
                            // Cek apakah salah satu child route sedang aktif
                            $childRoutes = array_map(
                                fn($child) => 'admin.' . explode('.', $child['route'])[1] . '.*',
                                $item['children'],
                            );
                            $isActive = request()->routeIs($childRoutes);
                        @endphp
                        <div x-data="{ open: {{ $isActive ? 'true' : 'false' }} }">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-4 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                <span class="flex items-center">
                                    <i class="bi {{ $item['icon'] }} mr-3"></i>
                                    {{ $item['label'] }}
                                </span>
                                <svg class="w-5 h-5 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-1 space-y-1 pl-8">
                                @foreach ($item['children'] as $childKey => $child)
                                    <a href="{{ route($child['route']) }}"
                                        class="block px-4 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.' . $childKey . '.*') ? 'text-white bg-gray-900' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        {{ $child['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        {{-- Jika item adalah menu biasa (tanpa dropdown) --}}
                        <a href="{{ route($item['route']) }}"
                            class="flex items-center px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                  {{ request()->routeIs('admin.' . $key . '.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="bi {{ $item['icon'] }} mr-3"></i>
                            {{ $item['label'] }}
                        </a>
                    @endif
                @endforeach
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header
                class="bg-white shadow-sm flex items-center justify-between md:justify-end px-4 sm:px-6 lg:px-8 py-4">
                <button @click.stop="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-x-4">
                    <a href="{{ route('admin.profile.edit') }}"
                        class="text-sm font-medium text-gray-500 hover:text-gray-700">
                        <i class="bi bi-person-circle mr-1"></i> Edit Profil
                    </a>
                    <span class="text-gray-300">|</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                            <i class="bi bi-box-arrow-right mr-1"></i> Logout
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>

        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black opacity-50 z-20 md:hidden"
            x-cloak></div>
    </div>
</body>

</html>
