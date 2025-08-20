<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller
{
    public function index() {
        // $videos = Video::all();
        // return view('admin.videos.index', compact('videos'));

        $videos = Video::latest()->paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    public function create() {
        return view('admin.videos.create');
    }

    public function store(Request $request) {
        // Video::create($request->all());
        // return redirect()->route('videos.index')->with('success', 'Video ditambahkan');

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'video_url' => 'required|url',
            'deskripsi' => 'nullable|string',
        ]);

        Video::create($validated);
        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil ditambahkan.');
    }

    public function show(Video $video) {
        // return view('videos.show', compact('video'));

        return view('admin.videos.show', compact('video'));
    }

    public function edit(Video $video) {
        // return view('videos.edit', compact('video'));

        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video) {
        // $video->update($request->all());
        // return redirect()->route('videos.index')->with('success', 'Video diperbarui');

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'video_url' => 'required|url',
            'deskripsi' => 'nullable|string',
        ]);

        $video->update($validated);
        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil diperbarui.');
    }

    public function destroy(Video $video) {
        $video->delete();
        return back()->with('success', 'Video dihapus');
    }
}

