<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //_______________________________________________________________INDEX_____________________________________________________________
    public function index(Post $post)
    {
        return view('posts.index', [
            'posts' => $post->where('lang', app()->getLocale())
                ->latest()->get()
        ]);
    }

    //_______________________________________________________________CREATE_____________________________________________________________
    public function create()
    {
        return view('posts.create');
    }

    //_______________________________________________________________STORE_____________________________________________________________
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

    //_______________________________________________________________SHOW_____________________________________________________________
    public function show(string $locale, Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    //_______________________________________________________________EDIT_____________________________________________________________
    public function edit(string $locale, Post $post)
    {
        //show the edit form
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    //_______________________________________________________________UPDATE_____________________________________________________________
    public function update(Request $request, String $locale, Post $post)
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

        // $post = \App\Models\Post::find($id);

        //validacion del error pendiente

        //seteo la imagen
        $img = $request->file('img'); //archivo de la imagen
        $path = $img->store('img', 'public'); //path de la imagen ! IMPORTANTE !

        $post->update($validated);

        return redirect()->route( 'posts.index', ['locale' => app()->getLocale()] )
            ->with('success', 'Post edited');
    }

    //_______________________________________________________________DESTROY_____________________________________________________________
    public function destroy(String $locale, Post $post)
    {
        if($post){
            $post->delete();
        }

        return redirect()->route( 'posts.index', ['locale' => app()->getLocale()] )
        ->with('success', 'Post removed');
    }

}
