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
            'posts' => $post->all()
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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'subTitle' => 'required|max:255',
            'author' => 'required',
            'body' => 'required',
            'img' => 'required',
        ]);

        Post::create([
            'title' => $validated['title'],
            'subTitle' => $validated['subTitle'],
            'author' => $validated['author'],
            'body' => $validated['body'],
            'img' => $validated['img'],
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
