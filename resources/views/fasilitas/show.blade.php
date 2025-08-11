@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Jabal Nur</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">
    <h1>{{ $fasilitas->nama_fasilitas }}</h1>

    @if ($fasilitas->foto)
        <img src="{{ asset('storage/' . $fasilitas->foto) }}" class="img-fluid mb-3" alt="{{ $fasilitas->nama }}">
    @endif

    <p>{{ $fasilitas->deskripsi }}</p>

    <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
