<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\StatusCode;
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
            return response()->error('Image is not found', StatusCode::NOT_FOUND);
        }
    }

    public function update($image)
    {
        $image = Image::make($image)->fit(278, 278, null, 'center');
        $path = $user->image->path;
        $image->save(Storage::disk('local')->path("public/images/$path"));
    }
}
