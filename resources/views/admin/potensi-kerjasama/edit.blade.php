@extends('layouts.admin')
@section('title', 'Edit Potensi Kerjasama')
@section('content')
    <form method="POST" action="{{ route('admin.potensi-kerjasama.update', $item->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Potensi Kerjasama</h3>
                <div class="mt-6">@include('admin.potensi-kerjasama.partials.form', ['item' => $item])</div>
            </div>
        </div>
    </form>
@endsection
