@extends('layouts.admin')
@section('title', 'Edit Sertifikasi')
@section('content')
    <form method="POST" action="{{ route('admin.sertifikasis.update', $sertifikasi->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Sertifikasi</h3>
                <div class="mt-6">
                    @include('admin.sertifikasis.partials.form', ['sertifikasi' => $sertifikasi])
                </div>
            </div>
        </div>
    </form>
@endsection
