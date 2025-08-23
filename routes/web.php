<?php

use Illuminate\Support\Facades\Route;

// Controllers for Public Pages
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\GaleriController;

// Controllers for Authentication and Profile (from Breeze)
use App\Http\Controllers\ProfileController;

// Controllers for Admin Panel
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;

// Publikasi Controllers
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\KhazanahController;
use App\Http\Controllers\Admin\PhbnController;
use App\Http\Controllers\Admin\MateriPresentasiController;
use App\Http\Controllers\Admin\LaporanController;

// Tentang Kami Controllers
use App\Http\Controllers\Admin\ProfilLembagaController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\RoadmapController;

// Program Kerja Controller
use App\Http\Controllers\Admin\ProgramKerjaController as AdminProgramKerjaController;

// Galeri Controller
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;

// Old Controllers
use App\Http\Controllers\Admin\ArtikelIlmiahController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UlamaController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\CeramahController;
use App\Http\Controllers\Admin\PaketWisataController;
use App\Http\Controllers\Admin\SertifikasiController;
use App\Http\Controllers\Admin\ZiarahController;
use App\Http\Controllers\Admin\ManuskripController;
use App\Http\Controllers\Admin\StakeholderController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\HeritageController;
use App\Http\Controllers\Admin\LokasiZiarahController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\KajianController;
use App\Http\Controllers\Admin\PotensiKerjasamaController;

/*
|--------------------------------------------------------------------------
| Rute Publik (Untuk Pengunjung)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('tentangkami')->name('tentang.')->group(function () {
    Route::get('/profil-mes', [TentangKamiController::class, 'profil'])->name('profil');
    Route::get('/sebaran-potensi', [TentangKamiController::class, 'sebaranPotensi'])->name('potensi');
    Route::get('/visi-misi', [TentangKamiController::class, 'visiMisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [TentangKamiController::class, 'strukturOrganisasi'])->name('struktur');
    Route::get('/roadmap-organisasi', [TentangKamiController::class, 'roadmapOrganisasi'])->name('roadmap');
});

// Route::view('/programkerja/bidangbisnis', 'ProgramKerja.BidangBisnis.index')->name('program.bisnis');
// Route::view('/programkerja/bidangkaderisasi', 'ProgramKerja.BidangKaderisasi.index')->name('program.kaderisasi');
// Route::view('/programkerja/bidangmultimedia', 'ProgramKerja.BidangMultimedia.index')->name('program.multimedia');
// Route::view('/programkerja/bidangpendidikan', 'ProgramKerja.BidangPendidikan.index')->name('program.pendidikan');
// Route::view('/programkerja/bidangpenelitian', 'ProgramKerja.BidangPenelitian.index')->name('program.penelitian');
// Route::view('/programkerja/bidangsinergi', 'ProgramKerja.BidangSinergi.index')->name('program.sinergi');
// Route::view('/programkerja/bidangziswaf', 'ProgramKerja.BidangZiswaf.index')->name('program.ziswaf');
// Route::view('/programkerja/pengrusharian', 'ProgramKerja.PengurusHarian.index')->name('program.pengurus');
Route::get('/program-kerja/{bidang}', [ProgramKerjaController::class, 'show'])->name('program-kerja.show');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');


Route::get('/ulama', [WisataController::class, 'ulamaIndex'])->name('ulama.index');
Route::get('/ulama/{ulama}', [WisataController::class, 'ulamaShow'])->name('ulama.show');
Route::get('/fasilitas', [WisataController::class, 'fasilitasIndex'])->name('fasilitas.index');
Route::get('/fasilitas/{fasilitas}', [WisataController::class, 'fasilitasShow'])->name('fasilitas.show');
Route::get('/umkm', [WisataController::class, 'umkmIndex'])->name('umkm.index');
Route::get('/program', [WisataController::class, 'programIndex'])->name('program.index');

Route::get('/berita', [WisataController::class, 'beritaIndex'])->name('posts.berita');
Route::get('/api/berita', [WisataController::class, 'loadMoreBerita'])->name('api.berita.loadmore');
Route::get('/pengumuman', [WisataController::class, 'pengumumanIndex'])->name('posts.pengumuman');
Route::get('/api/pengumuman', [WisataController::class, 'loadMorePengumuman'])->name('api.pengumuman.loadmore');

Route::get('/ceramah', [WisataController::class, 'ceramahIndex'])->name('ceramah.index');
Route::get('/lokasiziarah', [WisataController::class, 'ziarahsIndex'])->name('ziarahs.index');
Route::get('/video', [WisataController::class, 'videoIndex'])->name('video.index');
Route::get('/paketwisata', [WisataController::class, 'paketWisataIndex'])->name('paketwisata.index');
Route::get('/sertifikasi', [WisataController::class, 'sertifikasiIndex'])->name('sertifikasi.index');



// Route::get('/ceramah', [WisataController::class, 'ceramahIndex'])->name('ceramahs.index');
// Route::get('/ceramah/{ceramah}', [WisataController::class, 'ceramahShow'])->name('ceramahs.show');
// Route::get('/ziarah', [WisataController::class, 'ziarahIndex'])->name('ziarahs.index');
// Route::get('/ziarah/{ziarah}', [WisataController::class, 'ziarahShow'])->name('ziarahs.show');

/*
|--------------------------------------------------------------------------
| Rute Autentikasi dan Dashboard Pengguna
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Rute Panel Admin (Terproteksi)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');

    // Tentang Kami Routes
    Route::get('/profil-lembaga', [ProfilLembagaController::class, 'edit'])->name('profil-lembaga.edit');
    Route::get('/visi-misi', [VisiMisiController::class, 'edit'])->name('visi-misi.edit');
    Route::patch('/visi-misi', [VisiMisiController::class, 'update'])->name('visi-misi.update');
    Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'edit'])->name('struktur-organisasi.edit');
    Route::patch('/struktur-organisasi', [StrukturOrganisasiController::class, 'update'])->name('struktur-organisasi.update');
    Route::get('/roadmap', [RoadmapController::class, 'edit'])->name('roadmap.edit');
    Route::patch('/profil-lembaga', [ProfilLembagaController::class, 'update'])->name('profil-lembaga.update');
    Route::patch('/roadmap', [RoadmapController::class, 'update'])->name('roadmap.update');
    Route::resource('potensi-kerjasama', PotensiKerjasamaController::class);

    // Publikasi Routes
    Route::resource('buku', BukuController::class);
    Route::resource('khazanah', KhazanahController::class);
    Route::resource('phbn', PhbnController::class);
    Route::resource('artikel-ilmiah', ArtikelIlmiahController::class);
    Route::resource('materi-presentasi', MateriPresentasiController::class);
    Route::resource('laporan', LaporanController::class);

    // Program Kerja Routes
    Route::resource('program-kerja', AdminProgramKerjaController::class);

    // Galeri Kegiatan Routes
    Route::resource('galeri', AdminGaleriController::class);

    Route::resource('posts', PostController::class);
    Route::resource('ulama', UlamaController::class);
    // Route::resource('fasilitas', FasilitasController::class);
    // Tak ganti mas iki error
    Route::resource('fasilitas', FasilitasController::class)->parameters(['fasilitas' => 'fasilitas']);
    Route::resource('umkm', UmkmController::class);
    Route::resource('ceramahs', CeramahController::class);
    Route::resource('paketwisatas', PaketWisataController::class);
    Route::resource('sertifikasis', SertifikasiController::class);
    Route::resource('ziarahs', ZiarahController::class);
    Route::resource('manuskrips', ManuskripController::class);
    Route::resource('stakeholders', StakeholderController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('heritages', HeritageController::class);
    Route::resource('lokasi-ziarahs', LokasiZiarahController::class);
    Route::resource('pelatihans', PelatihanController::class);
    Route::resource('artikels', ArtikelController::class);
    Route::resource('kajians', KajianController::class);

});

require __DIR__.'/auth.php';
