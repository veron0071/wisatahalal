@extends('layouts.admin')
@section('title', 'Tambah Stakeholder')
@section('content')
    <form method="POST" action="{{ route('admin.stakeholders.store') }}">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Tambah Stakeholder</h3>
                <div class="mt-6">
                    @include('admin.stakeholders.partials.form')
                </div>
            </div>
        </div>
    </form>
@endsection
