@extends('layouts.admin')
@section('title', 'Edit Program Kerja')
@section('content')
    <form method="POST" action="{{ route('admin.program-kerja.update', $program->id) }}"> @csrf @method('PUT') <div
            class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Program Kerja</h3>
                <div class="mt-6">@include('admin.program-kerja.partials.form', ['program' => $program])</div>
            </div>
        </div>
    </form>
@endsection
