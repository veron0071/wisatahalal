@extends('layouts.admin')

@section('title', 'Data Ulama')
@section('content')
<div class="container">
    <h1>Edit Ulama</h1>
    <form action="{{ route('admin.ulama.update', $ulama) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.ulama.partials.form')
    </form>
</div>
@endsection
