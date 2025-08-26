@extends('layouts.admin')
@section('title', 'Edit Opini & Berita')
@section('content')

    <form method="POST" action="{{ route('admin.opini-berita.update', $opiniBerita->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('admin.opini-berita.partials.form', ['opiniBerita' => $opiniBerita])
    </form>

@endsection
