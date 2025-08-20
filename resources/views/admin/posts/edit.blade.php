@extends('layouts.admin')
@section('title', 'Edit Post')
@section('content')
    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir Edit Post</h3>
                <div class="mt-6">
                    @include('admin.posts.partials.form', ['post' => $post])
                </div>
            </div>
        </div>
    </form>
@endsection
