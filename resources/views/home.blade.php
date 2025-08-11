@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Akhir body -->

<div class="text-center py-5 bg-light rounded shadow-sm">
    <h1 class="display-4 mb-3">Selamat Datang di Wisata Halal Jabal Nur</h1>
    <p class="lead">Eksplorasi kekayaan ulama, UMKM, dan fasilitas di sekitar Jabal Nur dengan mudah dan nyaman.</p>
    <a href="#eksplor" class="btn btn-primary mt-3">Mulai Eksplorasi</a>
</div>

<hr class="my-5" id="eksplor">

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5 class="card-title">Ulama</h5>
                <p class="card-text">Kenali tokoh-tokoh ulama yang berpengaruh di kawasan ini.</p>
                <a href="{{ route('ulama.index') }}" class="btn btn-outline-primary">Lihat Ulama</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5 class="card-title">Fasilitas</h5>
                <p class="card-text">Temukan masjid, pesantren, dan fasilitas umum lainnya.</p>
                <a href="{{ route('fasilitas.index') }}" class="btn btn-outline-primary">Lihat Fasilitas</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5 class="card-title">UMKM</h5>
                <p class="card-text">Dukung usaha lokal dan produk halal dari masyarakat sekitar.</p>
                <a href="{{ route('umkm.index') }}" class="btn btn-outline-primary">Lihat UMKM</a>
            </div>
        </div>
    </div>
</div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
