@extends('layouts.app')
@section('title', 'Data Ceramah')
@section('content')
<div class="container">
    <h1>Data Ceramah</h1>
    <a href="{{ route('admin.ceramahs.create') }}" class="btn btn-success mb-2">Tambah Ceramah</a>
    <table class="table table-bordered">
        <thead><tr><th>No</th><th>Judul</th><th>Aksi</th></tr></thead>
        <tbody>
            @foreach ($ceramahs as $ceramah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ceramah->judul }}</td>
                <td>
                    <a href="{{ route('admin.ceramahs.show', $ceramah->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('admin.ceramahs.edit', $ceramah->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.ceramahs.destroy', $ceramah->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
