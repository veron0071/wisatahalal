@extends('layouts.app')
@section('title', '{{ $title }} Ceramah')
@section('content')
<div class="container">
    <h1>{{ $title }} Ceramah</h1>
    <form action="{{ $action }}" method="POST">
        @csrf
        @if($isEdit) @method('PUT') @endif
        @include('admin.ceramahs.partials.form')
    </form>
</div>
@endsection
