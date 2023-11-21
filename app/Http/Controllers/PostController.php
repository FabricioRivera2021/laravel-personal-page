<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
        return view('posts.index', [
            'posts' => $post->where('lang', app()->getLocale())
                ->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //valido la data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'subTitle' => 'required|max:255',
            'author' => 'required',
            'body' => 'required',
            'img' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'lang' => 'required'
        ]);

        //validacion del error pendiente

        //seteo la imagen
        $img = $request->file('img');
        $path = $img->store('img', 'public');

        Post::create([
            'title' => $validated['title'],
            'subTitle' => $validated['subTitle'],
            'author' => $validated['author'],
            'body' => $validated['body'],
            'img' => $path,
            'lang' => $validated['lang']
        ]);

        return redirect()->route('posts.index', app()->getLocale())
            ->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $locale, Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

}
