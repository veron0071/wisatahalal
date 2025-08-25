@extends('layouts.admin')
@section('title', 'Tambah Publikasi Baru')

@section('content')
    <form method="POST" action="{{ route('admin.publikasi.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.publikasi.partials.form')
    </form>
@endsection
