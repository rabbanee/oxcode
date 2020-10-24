<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($id)
    {
        try {
            $image = Image::findOrFail($id);
            $path = Storage::disk('local')->path("public/images/$image->path");
            return response()->file($path);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => true,
                'message' => 'Image is not found'
            ]);
        }
    }
}
