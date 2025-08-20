<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Halal Jabal Nur (Tailwind CSS)</title>
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
                    <li><a href="{{ route('ulama.index') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100"><span class="ml-3">Sejarah Ulama</span></a></li>
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
                    <li><a href="" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Program Kerja</a></li>
                </ul>
            </nav>
        </aside>

        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

        <div id="main-content" class="flex-1 transition-all duration-300 ease-in-out">
            <header class="bg-white p-4 border-b flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle-btn">
                        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    <a href="index.html" class="text-xl font-bold text-jabal-green">Wisata Jabal Nur</a>
                </div>
                <div class="hidden md:flex items-center gap-2">
                    <a href="berita.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Berita</a>
                    <a href="pengumuman.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Pengumuman</a>
                    <a href="program-kerja.html" class="px-4 py-2 text-sm font-semibold text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">Program Kerja</a>
                </div>
            </header>

            <main>
                <section>
                    <div class="relative bg-cover bg-center text-white text-center py-20 md:py-28 px-6 overflow-hidden" style="background-image: url('https://unwahas.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-27-at-14.34.32-scaled.jpeg');">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="relative z-10">
                            <h1 class="text-3xl md:text-4xl font-bold">Selamat Datang di Wisata Halal Jabal Nur</h1>
                            <p class="max-w-2xl mx-auto mt-3">Eksplorasi kekayaan ulama, UMKM, dan fasilitas di sekitar Jabal Nur dengan mudah dan nyaman.</p>
                            <a href="#" class="mt-6 inline-block bg-white text-jabal-green font-semibold px-8 py-3 rounded-full shadow-md hover:bg-gray-100 transition-transform hover:-translate-y-1">Mulai Explorasi</a>
                        </div>
                    </div>
                </section>

                <div class="container mx-auto px-6 md:px-12 py-16">
                    <hr class="border-jabal-green border-t-2">
                    
                    <section class="pt-16 pb-12">
                        <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                            <div class="text-center mb-10">
                                <h2 class="text-3xl font-bold text-jabal-green">Selayang Pandang</h2>
                                <h3 class="text-xl font-semibold text-gray-700 mt-1">Pengurus Daerah Masyarakat Ekonomi Syariah</h3>
                                <p class="text-lg text-gray-600">Kabupaten Kendal</p>
                                <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                            </div>
                    
                            <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-6">
                                <p class="leading-relaxed">
                                    Perkumpulan Masyarakat Ekonomi Syariah atau dikenal Masyarakat Ekonomi Syariah (MES) merupakan organisasi nirlaba yang bertujuan mengembangkan dan membumikan ekonomi syariah sebagai sistem ekonomi yang berkeadilan dan berdasarkan prinsip-prinsip syariah. Sifat MES adalah menjadi wadah yang diakui sebagai acuan dan diikuti sebagai teladan bagi usaha percepatan pengembangan dan penerapan sistem ekonomi dan etika bisnis syariah di Indonesia, mandiri, bukan organisasi pemerintah, serta bukan organisasi politik dan bukan merupakan bagian darinya. MES didirikan pada 1 Muharram 1422 H, bertepatan 26 Maret 2001, dan dideklarasikan esok harinya di Jakarta. Hingga kini, MES menjadi wadah yang inklusif menghimpun seluruh sumber daya yang ada dan membangun sinergi antar pemangku kepentingan dalam rangka membangun dan mengembangkan ekonomi syariah.
                                </p>
                                <p class="leading-relaxed">
                                    Adapun PD (Pengurus Daerah) MES Kendal dilantik pada hari Sabtu, 13 November 2021, bertempat di Pendopo Tumenggung Bahurekso, Kendal. Pelantikan dilakukan oleh Ketua I Pengurus Wilayah MES Jawa Tengah, yaitu Nyata Nugraha. PD MES Kendal berkomitmen menjalankan peran sebagai katalisator perubahan melalui program-program berbasis pemberdayaan, literasi, dan kolaborasi multisektor. Dengan memadukan pendekatan keilmuan, praktik bisnis syariah, dan sinergi dengan pemerintah, akademisi, lembaga keuangan, serta komunitas, kami berupaya menciptakan dampak nyata bagi peningkatan kesejahteraan masyarakat.
                                </p>
                    
                                <div class="pt-6 mt-8 border-t">
                                    <h4 class="text-2xl font-bold text-jabal-green mb-4">Tujuan dan Manfaat</h4>
                                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                        <li>Menjelaskan identitas, visi-misi, dan struktur kepengurusan PD MES Kendal kepada publik</li>
                                        <li>Menyajikan rangkaian program unggulan dan kegiatan prioritas secara jelas dan terstruktur</li>
                                        <li>Menjadi alat promosi dan informasi resmi untuk berinteraksi dengan pemangku kepentingan</li>
                                        <li>Memudahkan kerjasama dengan instansi pemerintah, lembaga keuangan, dunia usaha, dan komunitas</li>
                                        <li>Menjadi bukti transparansi dan pertanggungjawaban organisasi kepada anggota dan masyarakat</li>
                                        <li>Membantu penggalangan dana dan sponsor dengan menunjukkan program dan dampak yang akan dicapai</li>
                                        <li>Memberikan arahan kerja yang jelas bagi pengurus dan relawan dalam melaksanakan program</li>
                                        <li>Mencatat perkembangan organisasi sebagai arsip dan referensi untuk periode berikutnya</li>
                                    </ol>
                                </div>
                    
                                <div class="pt-6 mt-8 border-t">
                                    <h4 class="text-2xl font-bold text-jabal-green mb-4">Target</h4>
                                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                        <li>Memperkenalkan visi, misi, dan program kerja MES Kendal kepada seluruh lapisan masyarakat.</li>
                                        <li>Menunjukkan legalitas dan struktur organisasi yang profesional</li>
                                        <li>Menjalin kerjasama strategis dengan instansi pemerintah dan swasta.</li>
                                        <li>Meningkatkan awareness masyarakat tentang MES Kendal di berbagai kalangan.</li>
                                        <li>Merealisasikan seluruh program kerja yang telah direncanakan dengan adanya sinergi dan kolaborasi.</li>
                                    </ol>
                                </div>
                    
                                <div class="pt-6 mt-8 border-t">
                                    <h4 class="text-2xl font-bold text-jabal-green mb-4">Legal Formal</h4>
                                    <p class="leading-relaxed mb-4">
                                        Perkumpulan Masyarakat Ekonomi Syariah merupakan organisasi yang telah memiliki legitimasi melalui aspek legal formal sebagai berikut:
                                    </p>
                                    <div class="space-y-4 text-gray-600">
                                        <p>
                                            <strong class="font-semibold text-gray-800">Akta Pendirian:</strong> 
                                            Akta Notaris Rini Martini Dahliani, SH. Nomor 03 Tanggal 22 Februari 2010 dan Nomor 02 Tanggal 16 April 2010 (perubahan) serta tertuang dalam Surat Keputusan Menteri Hukum dan Hak Asasi Manusia Nomor AHU-70.AH.01.06 Tanggal 22 Mei 2010 dan Lembar Berita Negara Nomor 47 Tanggal 14 Juni 2011.
                                        </p>
                                        <p>
                                            <strong class="font-semibold text-gray-800">Perubahan Akta (terakhir):</strong> 
                                            Akta Notaris Mohamad Fajri Mekka Putra, S.H, M.Kn. Nomor 10,- tentang Pernyataan Keputusan Rapat Musuawarah Nasional V Masyarakat Ekonomi Syariah tanggal 01 Februari 2021, serta terutang dalam Surat Keputusan Menteri Hukum dan Hak Asasi Manusia Nomor AHU-0000885.AH.01.08. TAHUN 2021 tentang Persetujuan Perubahan Perkumpulan Masyarakat Ekonomi Syariah tanggal 15 Juni 2021.
                                        </p>
                                        <p>
                                            <strong class="font-semibold text-gray-800">Pengurus Daerah Masyarakat Ekonomi Syariah Kabupaten Kendal:</strong> 
                                            Telah Terdaftar di Badan Kesatuan Bangsa dan Politik Kabupaten Kendal sejak tahun 2023 Sebagai Organisasi Masyarakat Resmi di wilayah Kabupaten Kendal Berdasarkan Nomor Surat 200.1.4.4/0757/2025 Tentang Tanggapan atas Laporan Keberadaan Kemasyarakatan (Ormas) Tanggal 23 Juli 2025.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pb-12">
                        <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                            <h2 class="text-2xl md:text-3xl font-bold text-center text-jabal-green mb-10">Visi dan Misi Masyarakat Ekonomi Syariah</h2>
                            
                            <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                                <div>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-jabal-green mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <h3 class="text-2xl font-bold text-jabal-green">Visi</h3>
                                    </div>
                                    <p class="text-gray-600 leading-relaxed">
                                        Ekonomi dan Keuangan Syariah yang Berkontribusi Signifikan dalam Ekosistem Perekonomian Nasional.
                                    </p>
                                </div>
                                
                                <div>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-jabal-green mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <h3 class="text-2xl font-bold text-jabal-green">Misi</h3>
                                    </div>
                                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                                        <li>Mendukung Indonesia menjadi Pusat Ekonomi dan Keuangan Syariah Dunia.</li>
                                        <li>Memperkuat Kontribusi Ekonomi dan Keuangan Syariah dalam Perekonomian Nasional.</li>
                                        <li>Mendorong Implementasi Sistem Ekonomi dan Keuangan Syariah yang Menyeluruh.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pb-12">
                        <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                            <div class="text-center mb-10">
                                <h2 class="text-3xl font-bold text-jabal-green">Struktur Organisasi</h2>
                                <p class="text-lg font-semibold text-gray-700 mt-2">SUSUNAN PENGURUS DAERAH MASYARAKAT EKONOMI SYARIAH</p>
                                <p class="text-md text-gray-600">KABUPATEN KENDAL PERIODE 1446-1451 H / 2024-2029 M</p>
                                <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                            </div>

                            <div class="max-w-4xl mx-auto text-left text-gray-700 space-y-8">
                                
                                <div>
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">A. DEWAN PEMBINA</h3>
                                    <div class="space-y-2 pl-4">
                                        <p><strong class="font-semibold w-28 inline-block">Ketua</strong>: KH. M. Nasyih Syarifuddin</p>
                                        <p><strong class="font-semibold w-28 inline-block">Wakil Ketua</strong>: KH. Basyar Rohman, SHI, MSi</p>
                                        <div class="flex">
                                            <strong class="font-semibold w-28 inline-block shrink-0">Anggota</strong>:
                                            <ul class="list-disc list-outside pl-5">
                                                <li>KH. Ahmad Yusro Mubarok</li>
                                                <li>Drs. H. Cahyanto, MM</li>
                                                <li>Izzuddin Latif, SH, MH</li>
                                                <li>Alfebian Yulando, ST, MA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">B. DEWAN PAKAR</h3>
                                    <div class="space-y-2 pl-4">
                                        <p><strong class="font-semibold w-28 inline-block">Ketua</strong>: Prof. Dr. H. Abdul Ghofur, MAg</p>
                                        <p><strong class="font-semibold w-28 inline-block">Wakil Ketua</strong>: Dr. Nur Fatoni, MAg</p>
                                        <div class="flex">
                                            <strong class="font-semibold w-28 inline-block shrink-0">Anggota</strong>:
                                            <ul class="list-disc list-outside pl-5">
                                                <li>Dr. Ali Murtadho, MAg</li>
                                                <li>Dr. KH Ahmad Tantowi, MSi, MPd</li>
                                                <li>Ubaidul Musthofa, SHI, MSi</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">C. BADAN PENGURUS HARIAN</h3>
                                    <div class="space-y-2 pl-4">
                                        <p><strong class="font-semibold w-32 inline-block">Ketua Umum</strong>: M. Irkham Fukhuludin, SEI. CWC.</p>
                                        <p><strong class="font-semibold w-32 inline-block">Sekretaris Umum</strong>: M. Fatchurrohman, SHI, ME.</p>
                                        <p><strong class="font-semibold w-32 inline-block">Sekretaris I</strong>: Muhammad Azmi Syafiq, SH, MH.</p>
                                        <p><strong class="font-semibold w-32 inline-block">Sekretaris II</strong>: Bayu Anggoro Husodo, SPd</p>
                                        <p><strong class="font-semibold w-32 inline-block">Bendahara Umum</strong>: Iqbal Sarayulus Nuh, SM</p>
                                        <p><strong class="font-semibold w-32 inline-block">Bendahara I</strong>: Ririn Inamatussolihah.</p>
                                        <p><strong class="font-semibold w-32 inline-block">Bendahara II</strong>: Mayya Shofa Mahfud, MPd.</p>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-xl font-bold text-jabal-green mb-4 border-b pb-2">D. BIDANG-BIDANG</h3>
                                    <div class="space-y-6 pl-4">
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">1. Bidang ZISWAF</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Charlie Ibrahim Noech, SE.</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Zuniar Dewi Karisa</li><li>M. Aslam Izzulhaq</li><li>M. Fahmi Yusuf</li><li>Muhamad Sukron</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">2. Bidang Penelitian dan Pengembangan Ekonomi Syariah</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Anathul Mualifah, SE.</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Zahrina Maulida</li><li>Najib Nurul Anam</li><li>Rismanda Nafikatu Rizqo</li><li>Shella Putri Mahardani</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">3. Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Muhammad Ihsan, SE, MH.</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Gilar Sundara, SMet, MT.</li><li>Agus Zaenul Fata, SEI.</li><li>M. Abdul Malik, SH.</li><li>Lisna Wahyu</li><li>Khoirur Rosyidin</li><li>Hariyadin, S.Pd</li><li>Nur Burhanuddin, SE., ME.</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">4. Bidang Multimedia dan Kominfo</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Hamam Amiruddin, SE</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Imamul Muqorrobin</li><li>M. Zulfikar Dhiyaulhaq</li><li>Aisya Suada', S.Pd</li><li>Abdul Ghofar</li><li>Firial Annasa</li><li>M. Afif Hidayatullah, SP</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">5. Bidang Sinergi Antar Lembaga dan Komunitas</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Arif Fajar Hidayat, SE</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Salamah Zulaidah, SEI</li><li>Ahmad Fahriz Saefudin, SE</li><li>Siti Luluk Mawanti</li><li>Renny Arrohmah</li><li>Ana Naila Rochaniyah</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">6. Bidang Kaderisasi</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Choirul Hasri, SE.</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Ayu Rahmawati, Ssos.</li><li>Intan Ainun Shahibah, SH.</li><li>M. Anharul Asror, SE</li><li>Mahabbah Islamiah, SE.</li></ul></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-800">7. Bidang Pendidikan dan Pelatihan</h4>
                                            <div class="pl-4 mt-2 space-y-1">
                                                <p><strong class="font-medium w-20 inline-block">Ketua</strong>: Ahmad Syaifudin, S.E, M.H.</p>
                                                <div class="flex"><strong class="font-medium w-20 inline-block shrink-0">Anggota</strong>: <ul class="list-disc list-outside pl-5"><li>Rifatul Muna, SHI, Msi.</li><li>Farhan Zulfa Al Mubarok, S.Ag.</li><li>Khusni Mubarok</li><li>Anita Rahayu, SE</li><li>Aina Ulfa Azzahwa</li><li>Muhammad Khairul Anam</li></ul></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pb-12">
                        <div class="bg-white p-8 md:p-12 rounded-2xl custom-shadow">
                            <div class="text-center mb-10">
                                <h2 class="text-3xl font-bold text-jabal-green">Roadmap Organisasi</h2>
                                <p class="text-lg text-gray-600 mt-1">Masyarakat Ekonomi Syariah</p>
                                <div class="w-24 h-1 bg-jabal-green mx-auto mt-4"></div>
                            </div>

                            <div class="mb-12">
                                <img src="{{ asset('images/roadmap.jpg') }}" alt="Roadmap Organisasi">
                            </div>

                            <div class="grid md:grid-cols-3 gap-8 text-center">
                                <div class="border-t-4 border-jabal-green pt-4">
                                    <h3 class="text-2xl font-bold text-jabal-green">2021 - 2023</h3>
                                    <p class="text-gray-600 mt-2">
                                        Mendukung Indonesia menjadi pusat ekonomi dan keuangan syariah dunia.
                                    </p>
                                </div>
                                
                                <div class="border-t-4 border-jabal-green pt-4">
                                    <h3 class="text-2xl font-bold text-jabal-green">2024 - 2027</h3>
                                    <p class="text-gray-600 mt-2">
                                        Memperkuat kontribusi ekonomi dan keuangan syariah dalam perekonomian nasional.
                                    </p>
                                </div>
                                
                                <div class="border-t-4 border-jabal-green pt-4">
                                    <h3 class="text-2xl font-bold text-jabal-green">2028 - 2030</h3>
                                    <p class="text-gray-600 mt-2">
                                        Mendorong implementasi sistem ekonomi dan keuangan syariah yang menyeluruh.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

                <footer class="text-center py-8">
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