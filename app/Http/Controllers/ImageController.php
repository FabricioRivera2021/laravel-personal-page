<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function getImage($filename)
    {
        $path = storage_path('app/public/' . $filename);

        dd($path);
        if (!file_exists($path)) {
            abort(404);
        }

        $file = Storage::get('public/' . $filename);
        $type = Storage::mimeType('public/' . $filename);

        $response = response($file, 200)->header('Content-Type', $type);

        return $response;
    }
}
