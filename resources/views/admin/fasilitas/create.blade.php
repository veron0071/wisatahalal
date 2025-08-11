@extends('layouts.admin')

@section('title', 'Data Fasilitas')
@section('content')

<div class="container">
    <h1>Tambah Fasilitas</h1>
    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.fasilitas.partials.form')
    </form>
</div>
@endsection

