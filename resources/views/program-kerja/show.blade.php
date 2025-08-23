@extends('layouts.app')
@section('title', 'Program Kerja - ' . $namaBidang)

@section('content')

    <div class="container mx-auto px-6 md:px-12 py-12">

        {{-- Judul Halaman Utama --}}
        <section>
            <h1 class="text-4xl font-bold text-jabal-green">Program Kerja</h1>
            <hr class="mt-4 mb-12 border-jabal-green border-t-2">
        </section>

        {{-- Konten Tabel dalam Kartu --}}
        <section class="bg-white rounded-2xl custom-shadow p-6 md:p-8">

            {{-- Judul untuk tabel ini, diambil dari controller --}}
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-jabal-green">{{ $namaBidang }}</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Komite Bidang</th>
                            <th scope="col" class="px-6 py-3">Program Kerja</th>
                            <th scope="col" class="px-6 py-3">Tujuan Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($programs->isNotEmpty())
                            @foreach ($programs as $index => $program)
                                <tr class="bg-white border-b">
                                    {{-- Kolom pertama hanya muncul di baris pertama dan digabung ke bawah --}}
                                    @if ($index == 0)
                                        <td rowspan="{{ $programs->count() }}"
                                            class="px-6 py-4 font-medium text-gray-900 align-top">
                                            {{ $program->komite_bidang }}
                                        </td>
                                    @endif
                                    <td class="px-6 py-4">{{ $program->program_kerja }}</td>
                                    <td class="px-6 py-4">{{ $program->tujuan_program }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="bg-white border-b">
                                <td colspan="3" class="px-6 py-4 text-center">
                                    Belum ada program kerja untuk bidang ini.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </section>

    </div>

@endsection
