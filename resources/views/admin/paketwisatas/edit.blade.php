@extends('layouts.admin')
@section('title', 'Edit Paket Wisata')
@section('content')
    <form method="POST" action="{{ route('admin.paketwisatas.update', $paketwisata->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Paket Wisata</h3>
                <div class="mt-6">
                    @include('admin.paketwisatas.partials.form', ['paketwisata' => $paketwisata])
                </div>
            </div>
        </div>
    </form>
@endsection
