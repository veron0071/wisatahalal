@extends('layouts.admin')
@section('title', 'Edit Materi Presentasi')
@section('content')
    <form method="POST" action="{{ route('admin.materi-presentasi.update', $materi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Materi</h3>
                <div class="mt-6">@include('admin.materi-presentasi.partials.form', ['materi' => $materi])</div>
            </div>
        </div>
    </form>
@endsection
