@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section>
                        <h1 class="text-4xl font-bold text-jabal-green">Program Kerja</h1>
                        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
                    </section>
                    
                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Pengurus Harian</h2>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="7" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Pengurus Harian
                                        </td>
                                        <td class="px-6 py-4">1. Dua Bulanan PD MES Kendal</td>
                                        <td class="px-6 py-4">Adanya Program Bersama Dewan Pakar atau Dewan Pembina terkait pembahasan tema secara dan adanya rapat koordinasi incidental dengan mengidentifikasi program, timeline agenda, program roadshow pengurus MES Kendal</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Inventarisasi dan kesekertariatan</td>
                                        <td class="px-6 py-4">Adanya tertib administrasi surat dan menginventariskan beberapa peralatan dan kelengkapan milik Pengurus Daerah MES Kendal.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">3. Laporan Pemasukan dan Biaya Serta Evaluasi Dana Kegiatan</td>
                                        <td class="px-6 py-4">Adanya tertib laporan keuangan dan mengevaluasi beberapa dana yang di dapatkan dari lembaga dan (Sponsorship) untuk kegiatan Pengurus Daerah MES Kendal.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">4. Mengkoordinasikan Program GIS Pesantren</td>
                                        <td class="px-6 py-4">Roadshow Pasar Modal Syariah oleh GIS Keuangan PD MES Kendal bekerjasama dengan Kantor Perwakilan Bursa Efek Indonesia (BEI) Jawa Tengah dan Phintraco Sekuritas Cabang Semarang Pengurus Daerah MES Kabupaten Kendal kembali mengajak kerjasama dengan Forum Komunikasi Pondok Pesantren (FKPP) Kabupaten Kendal untuk menambahan kompetensi dan skill para santri dan alumni yang biasa menalikan investor syariah.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">5. Dokumentasi seluruh Administrasi dan Aktivitas Organisasi</td>
                                        <td class="px-6 py-4">Dokumentasi seluruh acara dan kegiatan PD Mes Kendal serta aktifitas Organisasi dilaksanakan atas dasar kebutuhan tertib administrasi, tertib dokumentasi acara dan kesekretariatan acara. Adapun penyimpanan berkas kegiatan dan penyimpanan inventarisasi perlengkapan organisasi terdapat di Kantor Sekretariat PD MES Kendal.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">6. Pendelegasian</td>
                                        <td class="px-6 py-4">Pendelegasian setiap perwakilan organisasi dalam keikutsertaan acara, agenda dan aktifitas lainnya dalam pelaksanaan program kerja serta undangan untuk Organisasi.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">7. Tanah Wakaf Gedung Dakwah Ekonomi Islam</td>
                                        <td class="px-6 py-4">Pengadaan Tanah Wakaf Gedung Dakwah Ekonomi Islam di inisiasi oleh PD MES Kendal dan selanjutnya diusahakan untuk dibangun agar dapat dimanfaatkan untuk kepentingan Organisasi.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Ziswaf dan CSR</h2>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="5" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Ziswaf dan CSR
                                        </td>
                                        <td class="px-6 py-4">1. Kajian ZISWAF</td>
                                        <td class="px-6 py-4">Peningkatan literasi ZISWAF (Zakat, Infak, Sedekah, dan Wakaf) di kalangan masyarakat umum dan pelaku usaha.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Pelatihan ZISWAF</td>
                                        <td class="px-6 py-4">Peningkatan kapasitas pengelola lembaga ZISWAF melalui pelatihan manajemen dan tata kelola profesional.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">3. Penyaluran ZISWAF</td>
                                        <td class="px-6 py-4">Optimalisasi penyaluran dana ZISWAF untuk program pemberdayaan ekonomi umat yang produktif dan berkelanjutan.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">4. Kerjasama Program CSR</td>
                                        <td class="px-6 py-4">Sinergi dengan perusahaan untuk mengarahkan program Corporate Social Responsibility (CSR) pada sektor ekonomi syariah.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">5. Penerbitan Konten ZISWAF</td>
                                        <td class="px-6 py-4">Edukasi masyarakat melalui penerbitan konten kreatif dan informatif mengenai ZISWAF di berbagai platform media.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Penelitian dan Pengembangan Ekonomi Syariah</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="2" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Penelitian dan Pengembangan Ekonomi Syariah
                                        </td>
                                        <td class="px-6 py-4">1. Program Pemuda Melek Investasi (Talkshow, Seminar atau Workshop)</td>
                                        <td class="px-6 py-4">Memberikan Edukasi dalam Memulai Investasi sejak dini.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">2. Meneliti Potensi Ekonomi Syariah di Kab. Kendal</td>
                                        <td class="px-6 py-4">Melakukan Studi untuk mengidentifikasi potensi ekonomi syariah di Kab. Kendal di sektor UMKM dan lain sebagainya.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="3" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Bisnis, Pariwisata, dan Ekonomi Kreatif
                                        </td>
                                        <td class="px-6 py-4">1. Pendampingan Usaha Bisnis Syariah</td>
                                        <td class="px-6 py-4">Adanya Branding Produk, Kualitas Produk, Sertifikasi Halal dan Market Place.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Pendampingan Modal Bisnis Syariah</td>
                                        <td class="px-6 py-4">Memberikan Pendampingan untuk Bisnis Syariah Islam Memperoleh Pembiayaan untuk Modal usaha.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">3. Kajian Potensi Pariwisata dan Ekonomi Kreatif</td>
                                        <td class="px-6 py-4">Memberikan Edukasi dan Literasi kepada Masyarakat Daerah sekitar tempat Pariwisata di Kendal.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Multimedia dan Kominfo</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="4" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Multimedia dan Kominfo
                                        </td>
                                        <td class="px-6 py-4">1. Designer dan Editing</td>
                                        <td class="px-6 py-4">Menyiapkan dan Menyediakan Design Hari Besar, Design Event, Design Mingguan / Content serta editing Video.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Optimalisasi Akun Media Sosial</td>
                                        <td class="px-6 py-4">Adanya Optimalisasi Akun Media Sosial di Akun Facebook, Instagram dan Youtube.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">3. Membentuk Tim Kreatif</td>
                                        <td class="px-6 py-4">Melaksanakan Podcast dan Pengelolaan Website.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">4. Publikasi Kegiatan</td>
                                        <td class="px-6 py-4">Seluruh Kegiatan PD MES Kendal dipublikasikan di Sosial Media dan Website.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Sinergi Antar Lembaga dan Komunitas</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="3" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Sinergi Antar Lembaga Dan Komunitas
                                        </td>
                                        <td class="px-6 py-4">1. Penyusunan Company Profile</td>
                                        <td class="px-6 py-4">Media Pengenalan dan Kerjasama Program Kerja.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Silaturohim dan Audiensi</td>
                                        <td class="px-6 py-4">Silaturrohim dan Audiensi dengan, Bupati Kendal, Pemerintah Daerah dan Instansi Lainnya.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">3. Audiensi Kerjasama Wartawan</td>
                                        <td class="px-6 py-4">Melakukan Penawaran Kerjasama dengan Organisasi Wartawan di Daerah Kendal.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Kaderisasi</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="4" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Kaderisasi
                                        </td>
                                        <td class="px-6 py-4">1. Program Magang MES Kendal</td>
                                        <td class="px-6 py-4">Menyediakan Pihak Eksternal yang akan melakukan Magang di Organisasi PD MES Kendal selain itu juga dalam persiapan kaderisasi Pengurus PD MES Kendal di periode berikutnya.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. MES Goes to Campus</td>
                                        <td class="px-6 py-4">Pengenalan, sosialisasi dan edukasi MES kepada beberapa mahasiswa dan beberapa organisasi Kampus.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">3. MES Goes to School</td>
                                        <td class="px-6 py-4">Pengenalan dan edukasi tentang MES pada Murid Sekolah sehingga mengenal MES sejak dini.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">4. Ngumpul Manfaat</td>
                                        <td class="px-6 py-4">Acara ini digunakan untuk menemukan solusi pada permasalahan maupun informasi yang update yang didapat dari narasumber. Dengan adanya informasi tersebut diharapkan bisa menjadi sebuah pembelajaran dan pendidikan tambahan bagi para peserta.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8 mt-8">
                        <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-jabal-green mb-6">Bidang Pendidikan dan Pelatihan</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Komite Bidang</th>
                                        <th scope="col" class="px-6 py-3">Program Kerja</th>
                                        <th scope="col" class="px-6 py-3">Tujuan Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td rowspan="4" class="px-6 py-4 font-medium text-gray-900 align-middle">
                                            Bidang Pendidikan dan Pelatihan
                                        </td>
                                        <td class="px-6 py-4">1. Peningkatan Komunikasi, Informasi dan Edukasi Ekonomi Syariah di Masyarakat Umum dan Lingkungan Pendidikan</td>
                                        <td class="px-6 py-4">Pemahaman Masyarakat Umum dan Lingkungan Pendidikan terhadap Perilaku benua ekonomi dan bisnis syariah.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">2. Pelatihan Hard-Skill Pengurus PD MES Kendal dan Masyarakat Sekitar</td>
                                        <td class="px-6 py-4">Peningkatan Hard Skill di setiap individu Pengurus PD MES Kendal, Badan atau Unit Usaha, dan Masyarakat Sekitar secara kualitas dan kuantitas yang diakui secara legal oleh Lembaga Terkait Ekonomi Syariah.</td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">3. Dialog Interaktif</td>
                                        <td class="px-6 py-4">Acara ini digunakan untuk menemukan solusi maupun informasi yang terbaik yang didapat dari narasumber. Dengan adanya informasi tersebut diharapkan bisa menjadi sebuah terobosan atau solusi dalam mengatasi permasalahan yang ada.</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">4. Workshop Literasi, Training dan Pelatihan Ekonomi Syariah</td>
                                        <td class="px-6 py-4">Agenda ini dilaksanakan untuk meningkatkan literasi dan inklusi ekonomi dan keuangan syariah serta adanya pelatihan langsung tentang mekanisme praktek ekonomi dan keuangan syariah.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
@endsection