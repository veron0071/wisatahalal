@extends('layouts.admin')
@section('title', 'Edit Data Fasilitas')
@section('content')
    <form method="POST" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Fasilitas</h3>
                <div class="mt-6">
                    @include('admin.fasilitas.partials.form', ['fasilitas' => $fasilitas])
                </div>
            </div>
        </div>
    </form>
@endsection
