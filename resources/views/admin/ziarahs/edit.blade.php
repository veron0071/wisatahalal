@extends('layouts.admin')
@section('title', 'Edit Lokasi Ziarah')
@section('content')
    <form method="POST" action="{{ route('admin.ziarahs.update', $ziarah->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Lokasi Ziarah</h3>
                <div class="mt-6">
                    @include('admin.ziarahs.partials.form', ['ziarah' => $ziarah])
                </div>
            </div>
        </div>
    </form>
@endsection
