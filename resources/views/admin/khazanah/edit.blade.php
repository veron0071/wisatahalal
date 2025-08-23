@extends('layouts.admin')
@section('title', 'Edit Data Khazanah')
@section('content')
    <form method="POST" action="{{ route('admin.khazanah.update', $khazanah->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Khazanah</h3>
                <div class="mt-6">@include('admin.khazanah.partials.form', ['khazanah' => $khazanah])</div>
            </div>
        </div>
    </form>
@endsection
