<?php

namespace App\Http\Controllers;

use App\Models\Opini;
use Illuminate\Http\Request;

class OpiniController extends Controller
{
    public function index(Request $request)
    {
        $posts = Opini::latest()->paginate(5);

        $posts->through(fn ($post) => $post->append(['foto_url', 'file_url']));

        if ($request->wantsJson()) {
            return response()->json($posts);
        }

        return view('opini.index', ['posts' => $posts]);
    }
}
