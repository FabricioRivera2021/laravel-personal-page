<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostImgUploadController extends Controller
{
    public function uploadImg(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'img' => 'required',
        ]);
        
        // Store the image in the public storage folder
        $path = $request->file('img')->store('public/img');
        
        // Get the public URL of the stored file
        $url = Storage::url($path);
        
        // Return the URL as a JSON response
        return response()->json(['url' => $url]);
    }

    public function deleteImg(String $id)
    {
        $delete = Storage::delete($id);
        
        // Return the URL as a JSON response
        return response()->json(['url' => '']);
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
