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
    <h1>{{ $ulama->nama }}</h1>

    @if ($ulama->foto)
        <img src="{{ asset('storage/' . $ulama->foto) }}" class="img-fluid mb-3" alt="{{ $ulama->nama }}">
    @endif

    <p>{{ $ulama->deskripsi }}</p>

    <a href="{{ route('ulama.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
