<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index($id)
    {
        $image = Image::find($id);
        // $path = storage_path("app/public/images/$image->path");
        $path = Storage::disk('local')->path("public/images/$image->path");
        return response()->file($path);
    }
}
