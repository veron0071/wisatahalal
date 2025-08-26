@extends('layouts.admin')
@section('title', 'Tambah Data Kawasan Wisata Halal')

@section('content')
    <form method="POST" action="{{ route('admin.kawasan-wisata-halal.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.kawasan-wisata-halal.partials.form')
    </form>
@endsection
