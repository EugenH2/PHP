<?php

namespace App\Http\Controllers;

use Auth;
use Gate;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Post;


class MovieController extends Controller
{
    public function index()
    {
        return view('movies/indexMedia', ["movies" => Movie::paginate(15)]);
    }
    public function create()
    {

    }
    public function show(Movie $movie)
    {
        return view('movies/showMovie', [
            "movie" => $movie,
            "posts" => $movie->posts()->with(['user'])->orderBy('created_at', 'desc')->paginate(3)
        ]);
    }

    public function store($id)
    {
        request()->validate([
            'article' => ['required', 'min:2'],
        ]);

        Post::create([
            'post' => request('article'),
            'movie_id' => $id,
            'user_id' => Auth::user()->id
        ]);

        return redirect('media/' . $id);
    }

    public function edit(...$id)
    {
        $post = Post::find($id[1]);
        if (Auth::user()->cannot('edit', $post)) {
            abort(403);
        }

        return view('movies/editPost', ['post' => $post]);
    }

    public function update(...$id)
    {
        $post = Post::findOrFail($id[1]);
        if (Auth::user()->cannot('edit', $post)) {
            abort(403);
        }

        request()->validate([
            'article' => ['required', 'min:2'],
        ]);


        $post->post = request('article');
        $post->save();

        return redirect('media/' . $id[0]);
    }

    public function destroy(...$id)
    {
        $post = Post::findOrFail($id[1]);

        if (Auth::user()->cannot('edit', $post)) {
            abort(403);
        }

        $post->delete();

        return redirect('media/' . $id[0]);
    }

}
