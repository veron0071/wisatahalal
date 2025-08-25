@extends('layouts.admin')
@section('title', 'Tambah Data IKS')

@section('content')
    <form method="POST" action="{{ route('admin.industri-keuangan-syariah.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Tambah Data Industri Keuangan Syariah</h3>
                <div class="mt-6">
                    @include('admin.industri-keuangan-syariah.partials.form')
                </div>
            </div>
        </div>
    </form>
@endsection
