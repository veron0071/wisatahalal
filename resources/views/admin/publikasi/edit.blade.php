@extends('layouts.admin')
@section('title', 'Edit Data Publikasi')

@section('content')
    <form method="POST" action="{{ route('admin.publikasi.update', $publikasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('admin.publikasi.partials.form', ['publikasi' => $publikasi])
    </form>
@endsection
