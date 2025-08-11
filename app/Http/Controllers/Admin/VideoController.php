<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    public function create() {
        return view('videos.create');
    }

    public function store(Request $request) {
        Video::create($request->all());
        return redirect()->route('videos.index')->with('success', 'Video ditambahkan');
    }

    public function show(Video $video) {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video) {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video) {
        $video->update($request->all());
        return redirect()->route('videos.index')->with('success', 'Video diperbarui');
    }

    public function destroy(Video $video) {
        $video->delete();
        return back()->with('success', 'Video dihapus');
    }
}

