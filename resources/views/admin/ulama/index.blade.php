@extends('layouts.admin')

@section('title', 'Data Ulama')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Ulama</h2>
    <a href="{{ route('admin.ulama.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Tambah Ulama
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
            <th>Sejarah</th>
            <th>Foto</th>
            
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ulamas as $ulama)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ulama->nama }}</td>
                <td>{{ $ulama->sejarah }}</td>
                <td>
                    @if($ulama->foto)
                        <img src="{{ asset('storage/' . $ulama->foto) }}" alt="{{ $ulama->nama }}" width="80">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
                <td>
                    {{-- <a href="{{ route('admin.ulama.show', $ulama->id) }}" class="btn btn-info btn-sm">
                        <i class="bi bi-eye"></i> Detail
                    </a> --}}
                    <a href="{{ route('admin.ulama.edit', $ulama->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('admin.ulama.destroy', $ulama->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                <td colspan="5" class="text-center">Belum ada data ulama.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $ulamas->links() }}
</div>
@endsection
