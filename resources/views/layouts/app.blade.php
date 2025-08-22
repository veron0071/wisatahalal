<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wisata Halal Jabal Nur')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { 'jabal-green': '#255F38', 'jabal-light': '#1F7D53', 'jabal-putih': '#FFFFFF' },
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    borderRadius: { 'xl': '1rem', '2xl': '1.25rem' }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .custom-shadow { box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07); }
        .custom-shadow-hover:hover { box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1); }
    </style>
</head>

<body class="bg-slate-50">

    <div class="relative min-h-screen md:flex">
        
        <aside id="sidebar"
            class="fixed top-0 left-0 z-50 w-64 h-screen bg-white border-r p-6 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
            <a href="{{ route('home') }}" class="text-xl font-bold text-jabal-green">Wisata Jabal Nur</a>
            <nav class="mt-8 flex-grow overflow-y-auto">
                <ul class="space-y-2">
                    
                    <li x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center justify-between w-full p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100">
                            {{-- PERUBAHAN DI SINI --}}
                            <span class="ml-3 flex-grow text-left">Program MES Kendal</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul x-show="open" x-transition class="pl-8 mt-2 space-y-2">
                            <li><a href="{{ route('tentang.profil') }}" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Profil MES Kendal</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Visi Misi</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Struktur Organisasi</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Roadmap Organisasi</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Sebaran Potensi Kerjasama</a></li>
                        </ul>
                    </li>

                    <li x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center justify-between w-full p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100">
                            {{-- PERUBAHAN DI SINI --}}
                            <span class="ml-3 flex-grow text-left">Program Kerja</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul x-show="open" x-transition class="pl-8 mt-2 space-y-2">
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Pengurus Harian</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Ziswaf dan CSR</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Penelitian dan Pengembangan Ekonomi Syariah</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Multimedia dan Kominfo</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Sinergi Antar Lembaga Dan Komunitas</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Kaderisasi</a></li>
                            <li><a href="#" class="block p-2 text-sm rounded-lg hover:bg-gray-50">Bidang Pendidikan dan Pelatihan</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </aside>

        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

        <div id="main-content" class="flex-1 flex flex-col transition-all duration-300 ease-in-out">
            <header class="bg-white p-4 border-b flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle-btn">
                        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
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
                    <a href="{{ route('home') }}" class="text-xl font-bold text-jabal-green">Wisata Jabal Nur</a>
                </div>
                <div class="hidden md:flex items-center gap-2">
                    <a href="{{ route('posts.berita') }}"
                        class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Berita</a>
                    <a href="{{ route('posts.pengumuman') }}"
                        class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Pengumuman</a>
                    <a href="{{ route('program.index') }}"
                        class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Program
                        Kerja</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const toggleBtn = document.getElementById('sidebar-toggle-btn');
            const iconOpen = document.getElementById('icon-open');
            const iconClose = document.getElementById('icon-close');
            const mainContent = document.getElementById('main-content');

            function toggleSidebar() {
                const isSidebarOpen = !sidebar.classList.contains('-translate-x-full');
                sidebar.classList.toggle('-translate-x-full');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
                if (window.innerWidth < 768) {
                    overlay.classList.toggle('hidden');
                } else {
                    mainContent.classList.toggle('ml-64', !isSidebarOpen);
                }
            }
            if (window.innerWidth >= 768) {
                sidebar.classList.add('-translate-x-full');
                mainContent.classList.remove('ml-64');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
            toggleBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleSidebar();
            });
            overlay.addEventListener('click', toggleSidebar);
        });
    </script>
</body>
</html>