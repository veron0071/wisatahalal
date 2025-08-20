@extends('layouts.admin')
@section('title', 'Edit Ceramah')
@section('content')
    <form method="POST" action="{{ route('admin.ceramahs.update', $ceramah->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Ceramah</h3>
                <div class="mt-6">
                    @include('admin.ceramahs.partials.form', ['ceramah' => $ceramah])
                </div>
            </div>
        </div>
    </form>
@endsection
