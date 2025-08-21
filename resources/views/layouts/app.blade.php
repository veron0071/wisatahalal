<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wisata Halal Jabal Nur')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- ========================================================== --}}
    {{-- PASTIKAN SCRIPT INI ADA UNTUK INTERAKTIVITAS --}}
    {{-- ========================================================== --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'jabal-green': '#255F38',
                        'jabal-light': '#1F7D53',
                        'jabal-putih': '#FFFFFF'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    },
                    borderRadius: {
                        'xl': '1rem',
                        '2xl': '1.25rem'
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .custom-shadow {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        }

        .custom-shadow-hover:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-slate-50">

    <div class="relative min-h-screen md:flex">
        <aside id="sidebar"
            class="fixed top-0 left-0 z-50 w-64 h-screen bg-white border-r p-6 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col md:translate-x-0">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-jabal-green md:hidden">Wisata Jabal Nur</a>
            <nav class="mt-8 md:mt-0">
                <ul class="space-y-2">
                    <li><a href="{{ route('ulama.index') }}"
                            class="flex items-center p-2 text-base font-normal rounded-lg {{ request()->routeIs('ulama.*') ? 'font-semibold text-jabal-green bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"><span
                                class="ml-3">Sejarah Ulama</span></a></li>
                    <li><a href="{{ route('fasilitas.index') }}"
                            class="flex items-center p-2 text-base font-normal rounded-lg {{ request()->routeIs('fasilitas.*') ? 'font-semibold text-jabal-green bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"><span
                                class="ml-3">Fasilitas</span></a></li>
                    <li><a href="{{ route('umkm.index') }}"
                            class="flex items-center p-2 text-base font-normal rounded-lg {{ request()->routeIs('umkm.*') ? 'font-semibold text-jabal-green bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"><span
                                class="ml-3">UMKM Halal</span></a></li>
                    {{-- ... link lainnya ... --}}
                </ul>
            </nav>
        </aside>

        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

        <div id="main-content" class="flex-1 flex flex-col transition-all duration-300 ease-in-out md:ml-64">
            <header class="bg-white p-4 border-b flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle-btn" class="md:hidden">
                        <svg id="icon-open" xmlns="http://www.w.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-jabal-green hidden md:block">Wisata
                        Jabal Nur</a>
                </div>
            </header>

            <main class="flex-grow">
                @yield('content')
            </main>

            <footer class="text-center py-8 bg-slate-50 border-t">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Wisata Halal Jabal Nur. Dikembangkan oleh PD
                    MES Kendal.</p>
            </footer>
        </div>
    </div>

    {{-- Script sidebar Anda tetap di sini --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const toggleBtn = document.getElementById('sidebar-toggle-btn');
            const iconOpen = document.getElementById('icon-open');
            const iconClose = document.getElementById('icon-close');

            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            }

            if (toggleBtn) {
                toggleBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    toggleSidebar();
                });
            }
            if (overlay) {
                overlay.addEventListener('click', toggleSidebar);
            }
        });
    </script>
</body>

</html>
