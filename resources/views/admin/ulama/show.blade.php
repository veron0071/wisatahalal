@extends('layouts.admin')

@section('title', 'Detail Ulama')
@section('content')
<h2>{{ $ulama->nama }}</h2>
<img src="{{ asset('storage/' . $ulama->foto) }}" width="200" class="mb-3">
<p>{!! nl2br(e($ulama->deskripsi)) !!}</p>
<a href="{{ route('admin.ulama.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
    