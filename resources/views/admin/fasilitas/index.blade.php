@extends('layouts.admin')

@section('title', 'Data fasilitas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data fasilitas</h2>
    <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Tambah fasilitas
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($fasilitas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_fasilitas }}</td>
                <td>{{ $item->deskripsi}}</td>
                <td>{{ $item->lokasi }}</td>
                <td>
                    @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" width="80">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
                <td>
                 
                    <a href="{{ route('admin.fasilitas.edit', $item->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data fasilitas.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $fasilitas->links() }}
</div>
@endsection
