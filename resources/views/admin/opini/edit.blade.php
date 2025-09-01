@extends('layouts.admin')
@section('title', 'Edit Opini')

@section('content')
    <form method="POST" action="{{ route('admin.opini.update', $opini->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Opini & Berita</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Perbarui detail opini di bawah ini.</p>

                <div class="mt-6 border-t border-gray-200 pt-6">
                    @include('admin.opini.partials.form', ['opini' => $opini])
                </div>
            </div>
        </div>

        <div class="mt-8 pt-5">
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.opini.index') }}"
                    class="rounded-md bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 border border-gray-300">Batal</a>
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
            </div>
        </div>
    </form>
@endsection
