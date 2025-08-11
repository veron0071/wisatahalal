@extends('layouts.app') {{-- Pastikan ini layout utama kamu --}}

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Jabal Nur</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">
    <h1>Daftar Ulama</h1>

    <div class="row">
        @foreach ($ulama as $u)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($u->foto)
                        <img src="{{ asset('storage/' . $u->foto) }}" class="card-img-top" alt="{{ $u->nama }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $u->nama }}</h5>
                        <p class="card-text">{{ Str::limit($u->deskripsi, 100) }}</p>
                        <a href="{{ route('ulama.show', $u->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $ulama->links() }}
</div>
@endsection
