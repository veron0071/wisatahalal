@extends('layouts.admin')
@section('title', 'Tambah Data UMKM')
@section('content')
    <form method="POST" action="{{ route('admin.umkm.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Tambah UMKM</h3>
                <div class="mt-6">
                    @include('admin.umkm.partials.form')
                </div>
            </div>
        </div>
    </form>
@endsection
