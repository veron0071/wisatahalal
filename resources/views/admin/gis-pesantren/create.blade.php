@extends('layouts.admin')
@section('title', 'Unggah Foto GIS Pesantren')
@section('content')
    <form method="POST" action="{{ route('admin.gis-pesantren.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Unggah Foto</h3>
                <div class="mt-6">
                    @include('admin.gis-pesantren.partials.form')
                </div>
            </div>
        </div>
    </form>
@endsection
