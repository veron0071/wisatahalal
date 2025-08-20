@extends('layouts.admin')
@section('title', 'Arsipkan Manuskrip Baru')
@section('content')
    <form method="POST" action="{{ route('admin.manuskrips.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Arsip Manuskrip</h3>
                <div class="mt-6">
                    @include('admin.manuskrips.partials.form')
                </div>
            </div>
        </div>
    </form>
@endsection
