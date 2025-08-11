@extends('layouts.admin')

@section('title', 'Data Ulama')
@section('content')

<div class="container">
    <h1>Tambah Ulama</h1>
    <form action="{{ route('admin.ulama.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.ulama.partials.form')
    </form>
</div>
@endsection

