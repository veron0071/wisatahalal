<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Ulama - Wisata Jabal Nur</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body id="page-top" class="bg-slate-50">

    <div class="relative min-h-screen md:flex">
        <aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen bg-white border-r p-6 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
            <h2 class="text-2xl font-bold text-jabal-green md:hidden">Wisata Jabal Nur</h2>
            <nav class="mt-8 md:mt-0">
                <ul class="space-y-2">
                    <li><a href="{{ route('ulama.index') }}" class="flex items-center p-2 text-base font-semibold text-jabal-green bg-gray-100 rounded-lg"><span class="ml-3">Sejarah Ulama</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Fasilitas</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">UMKM Halal</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Ceramah & Kajian</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Lokasi Ziarah</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Video</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Paket Wisata</span></a></li>
                    <li><a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Sertifikasi Halal</span></a></li>
                    <li><hr class="my-2 border-gray-200"></li>
                    <li><a href="berita.html" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Berita</span></a></li>
                    <li><a href="pengumuman.html" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Pengumuman</span></a></li>
                    <li><a href="program-kerja.html" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Program Kerja</span></a></li>
                </ul>
            </nav>
        </aside>

        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

        <div id="main-content" class="flex-1 flex flex-col transition-all duration-300 ease-in-out">
            <header class="bg-white p-4 border-b flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle-btn">
                        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-jabal-green">Wisata Jabal Nur</a>
                </div>
                <div class="hidden md:flex items-center gap-2">
                    <a href="berita.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Berita</a>
                    <a href="pengumuman.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Pengumuman</a>
                    <a href="program-kerja.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Program Kerja</a>
                </div>
            </header>

            <main class="flex-grow">
                
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

            </main>

            <footer class="text-center py-8 bg-slate-50 border-t">
                <p class="text-gray-500 text-sm">&copy; 2025 Wisata Halal Jabal Nur. Dikembangkan oleh PD MES Kendal.</p>
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
                overlay.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
                if (window.innerWidth >= 768) {
                    mainContent.classList.toggle('md:ml-64', !isSidebarOpen);
                }
            }

            toggleBtn.addEventListener('click', toggleSidebar);
            overlay.addEventListener('click', toggleSidebar);
        });
    </script>
</body>
</html>