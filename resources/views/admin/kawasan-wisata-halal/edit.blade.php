@extends('layouts.admin')
@section('title', 'Edit Data Kawasan Wisata Halal')

@section('content')
    <form method="POST" action="{{ route('admin.kawasan-wisata-halal.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('admin.kawasan-wisata-halal.partials.form', ['data' => $data])
    </form>

    {{-- Form-form delete tersembunyi diletakkan di sini, di luar form utama --}}
    @if (isset($data) && $data->dokumentasi->isNotEmpty())
        @foreach ($data->dokumentasi as $doc)
            <form id="delete-doc-{{ $doc->id }}"
                action="{{ route('admin.kawasan-wisata-halal.dokumentasi.destroy', $doc->id) }}" method="POST" class="hidden"
                onsubmit="return confirm('Yakin ingin menghapus file ini?');">
                @csrf
                @method('DELETE')
            </form>
        @endforeach
    @endif
@endsection
