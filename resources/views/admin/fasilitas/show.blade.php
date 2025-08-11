@extends('layouts.admin')

@section('title', 'Detail fasilitas')
@section('content')
<h2>{{ $fasilitas->nama }}</h2>
<img src="{{ asset('storage/' . $fasilitas->foto) }}" width="200" class="mb-3">
<p>{!! nl2br(e($fasilitas->deskripsi)) !!}</p>
<a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
    