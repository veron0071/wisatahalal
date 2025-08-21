<?php

use Illuminate\Support\Facades\Route;

// Controllers for Public Pages
use App\Http\Controllers\WisataController;

// Controllers for Authentication and Profile (from Breeze)
use App\Http\Controllers\ProfileController;

// Controllers for Admin Panel
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

Route::get('/ulama', [WisataController::class, 'ulamaIndex'])->name('ulama.index');
Route::get('/ulama/{ulama}', [WisataController::class, 'ulamaShow'])->name('ulama.show');
Route::get('/fasilitas', [WisataController::class, 'fasilitasIndex'])->name('fasilitas.index');
Route::get('/fasilitas/{fasilitas}', [WisataController::class, 'fasilitasShow'])->name('fasilitas.show');
Route::get('/umkm', [WisataController::class, 'umkmIndex'])->name('umkm.index');
Route::get('/program', [WisataController::class, 'programIndex'])->name('program.index');

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
    Route::resource('potensi-kerjasama', PotensiKerjasamaController::class);
});

require __DIR__.'/auth.php';
