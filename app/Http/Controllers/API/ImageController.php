<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\StatusCode;
use Intervention\Image\Facades\Image as ImageTools;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($id)
    {
        try {
            $image = Image::findOrFail($id);
        } catch (\Throwable $th) {
            return response()->error('Image is not found', StatusCode::NOT_FOUND);
        }

        // $path = Storage::disk('local')->path("public/images/$image->path");
        // $imageTools = ImageTools::make($path);
        // $imageTools->fit(300, 300, null, 'center');

        return response()->file($image);
    }
}
