
@extends('layouts.admin')


@section('content')
    <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p>Anda berada di Panel Admin. Silakan gunakan menu di sebelah kiri untuk mengelola konten website.</p>
@endsection
