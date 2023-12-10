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
        try {
            // Attempt to delete the file
            $delete = Storage::delete($id);
    
            if ($delete) {
                // If deletion was successful, return the URL as a JSON response
                return response()->json(['url' => $id]);
            } else {
                // If deletion failed, return an error response
                return response()->json(['error' => 'Failed to delete the file.'], 500);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
