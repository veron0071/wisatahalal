@extends('layouts.admin')
@section('title', 'Edit Foto GIS Pesantren')
@section('content')
    <form method="POST" action="{{ route('admin.gis-pesantren.update', $foto->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Keterangan</h3>
                <div class="mt-6">
                    @include('admin.gis-pesantren.partials.form', ['foto' => $foto])
                </div>
            </div>
        </div>
    </form>
@endsection
