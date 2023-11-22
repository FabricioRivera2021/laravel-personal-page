<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostImgUploadController extends Controller
{
    public function uploadImg(Request $request)
    {
        // Validate the uploaded file
        dd($request);
        $request->validate([
            'image' => 'required|image|mimes:jpg',
        ]);

        // Store the image in the public storage folder
        $path = $request->file('image')->store('public/img');

        // Get the public URL of the stored file
        $url = Storage::url($path);

        // Return the URL as a JSON response
        return response()->json(['url' => $url]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
