@extends('layouts.admin')
@section('title', 'Tambah Potensi Kerjasama')
@section('content')
    <form method="POST" action="{{ route('admin.potensi-kerjasama.store') }}">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Potensi Kerjasama</h3>
                <div class="mt-6">@include('admin.potensi-kerjasama.partials.form')</div>
            </div>
        </div>
    </form>
@endsection
