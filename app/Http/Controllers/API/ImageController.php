<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index($id)
    {
        $image = Image::find($id);
        $path = storage_path("images/$image->url");
        return response()->file($path);
    }
}
