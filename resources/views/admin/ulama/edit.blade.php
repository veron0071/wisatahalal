{{-- @extends('layouts.admin')
@section('title', 'Edit Data Ulama')
@section('content')
    <form method="POST" action="{{ route('admin.ulama.update', $ulama->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Ulama</h3>
                <div class="mt-6">
                    @include('admin.ulama.partials.form', ['ulama' => $ulama])
                </div>
            </div>
        </div>
    </form>
@endsection --}}

@extends('layouts.admin')
@section('title', 'Edit Data Ulama')
@section('content')
    <form method="POST" action="{{ route('admin.ulama.update', $ulama->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- Kartu putih dengan bayangan sebagai wadah form --}}
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Ulama</h3>
                <div class="mt-6">
                    {{-- Memanggil form isian yang sudah kita perbaiki --}}
                    @include('admin.ulama.partials.form', ['ulama' => $ulama])
                </div>
            </div>
        </div>
    </form>
@endsection
