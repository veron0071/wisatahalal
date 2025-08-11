@extends('layouts.admin')

@section('title', 'Edit Fasilitas')
@section('content')
<div class="container">
    <h1>Edit Fasilitas</h1>
    <form action="{{ route('admin.fasilitas.update', $fasilitas) }}" method="POST" enctype="multipart/form-data">


        @csrf
        @method('PUT')
        @include('admin.fasilitas.partials.form')
    </form>
</div>
@endsection
