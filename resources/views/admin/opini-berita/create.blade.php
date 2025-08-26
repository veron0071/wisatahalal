@extends('layouts.admin')
@section('title', 'Tambah Opini & Berita')
@section('content')

    <form method="POST" action="{{ route('admin.opini-berita.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.opini-berita.partials.form')
    </form>

@endsection
