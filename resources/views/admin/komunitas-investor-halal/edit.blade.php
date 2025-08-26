@extends('layouts.admin')
@section('title', 'Link Komunitas Investor Halal')

@section('content')
    <form method="POST" action="{{ route('admin.komunitas-investor-halal.update') }}">
        @csrf
        @method('PATCH')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Pengaturan Link WhatsApp Komunitas Investor Halal
                </h3>
                <p class="mt-2 text-sm text-gray-500">
                    Masukkan link grup WhatsApp di bawah ini. Link ini akan digunakan pada tombol di halaman depan.
                </p>

                @if (session('success'))
                    <div class="mt-4 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.06 0l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mt-6 space-y-4">
                    <div>
                        <label for="whatsapp_link" class="block text-sm font-medium text-gray-700">Link WhatsApp</label>
                        <div class="mt-1">
                            <input type="url" name="whatsapp_link" id="whatsapp_link"
                                class="block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('whatsapp_link', $link->whatsapp_link) }}"
                                placeholder="https://chat.whatsapp.com/xxxx" required>
                        </div>
                        @error('whatsapp_link')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 pt-5 border-t border-gray-200">
                    <div class="flex justify-end">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
