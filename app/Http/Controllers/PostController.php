<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
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
        $img = $request->file('img'); //archivo de la imagen
        $path = $img->store('img', 'public'); //path de la imagen ! IMPORTANTE !

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

    public function edit(string $locale, Post $post)
    {
        //show the edit form
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        // update the resource
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
        $img = $request->file('img'); //archivo de la imagen
        $path = $img->store('img', 'public'); //path de la imagen ! IMPORTANTE !

        $post->update($validated);

        return redirect()->route('posts.index', app()->getLocale())
            ->with('success', 'Post created');
    }

}
