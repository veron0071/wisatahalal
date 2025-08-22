<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="icon" type="image/png" href="{{ asset('admin_wisata.png') }}">

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
    {{-- Inisialisasi state Alpine.js untuk sidebar --}}
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-100">

        <aside
            class="fixed inset-y-0 left-0 z-30 w-64 bg-gray-800 text-white transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0"
            :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }"
            @click.away="sidebarOpen = false" x-cloak>
            <div class="h-16 flex items-center justify-center text-xl font-bold border-b border-gray-700">
                <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-gray-300 transition-colors">
                    Admin Panel
                </a>
            </div>
            <nav class="flex-1 px-2 py-4 space-y-2">
                @php
                    $menuItems = [
                        'posts' => ['icon' => 'bi-pin-angle-fill', 'label' => 'Posts', 'route' => 'admin.posts.index'],
                        'ulama' => [
                            'icon' => 'bi-person-lines-fill',
                            'label' => 'Data Ulama',
                            'route' => 'admin.ulama.index',
                        ],
                        'fasilitas' => [
                            'icon' => 'bi-building',
                            'label' => 'Data Fasilitas',
                            'route' => 'admin.fasilitas.index',
                        ],
                        'umkm' => ['icon' => 'bi-shop', 'label' => 'Data UMKM', 'route' => 'admin.umkm.index'],
                        'ceramahs' => [
                            'icon' => 'bi-mic',
                            'label' => 'Ceramah & Kajian',
                            'route' => 'admin.ceramahs.index',
                        ],
                        'ziarahs' => [
                            'icon' => 'bi-geo-alt',
                            'label' => 'Lokasi Ziarah',
                            'route' => 'admin.ziarahs.index',
                        ],
                        'videos' => ['icon' => 'bi-play-btn', 'label' => 'Video', 'route' => 'admin.videos.index'],
                        'paketwisatas' => [
                            'icon' => 'bi-backpack',
                            'label' => 'Paket Wisata',
                            'route' => 'admin.paketwisatas.index',
                        ],
                        'sertifikasis' => [
                            'icon' => 'bi-award',
                            'label' => 'Sertifikasi Halal',
                            'route' => 'admin.sertifikasis.index',
                        ],
                        'manuskrips' => [
                            'icon' => 'bi-journal-bookmark',
                            'label' => 'Arsip Manuskrip',
                            'route' => 'admin.manuskrips.index',
                        ],
                        'stakeholders' => [
                            'icon' => 'bi-people',
                            'label' => 'Stakeholders',
                            'route' => 'admin.stakeholders.index',
                        ],
                        'potensi-kerjasama' => [
                            'icon' => 'bi-diagram-3',
                            'label' => 'Potensi Kerjasama',
                            'route' => 'admin.potensi-kerjasama.index',
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $key => $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              {{ request()->routeIs('admin.' . $key . '.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="bi {{ $item['icon'] }} mr-3"></i>
                        {{ $item['label'] }}
                    </a>
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

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                        <i class="bi bi-box-arrow-right mr-1"></i> Logout
                    </button>
                </form>
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
