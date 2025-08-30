<?php

namespace App\Http\Controllers;

use App\Models\Opini;
use Illuminate\Http\Request;

class OpiniController extends Controller
{
    public function index(Request $request)
    {
        $posts = Opini::latest()->paginate(6);

        $posts->through(fn ($post) => $post->append(['foto_url', 'file_url']));

        if ($request->wantsJson()) {
            return response()->json($posts);
        }

        return view('opini.index', ['posts' => $posts]);
    }

    public function show(Opini $opini)
    {
        // Ambil juga 4 postingan terbaru lainnya untuk ditampilkan di sidebar
        $recentPosts = Opini::where('id', '!=', $opini->id)->latest()->take(5)->get();

        return view('opini.show', [
            'post' => $opini,
            'recentPosts' => $recentPosts
        ]);
    }
}
