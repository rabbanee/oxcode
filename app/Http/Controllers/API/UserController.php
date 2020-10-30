<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUser;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function update(UpdateUser $request)
    {
        try {
            $user = User::findOrFail($request->user()->id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            return response()->error('User is not found', StatusCode::NOT_FOUND);
        } catch (\Throwable $th) {
            return response()->error('Something went error', StatusCode::INTERNAL_SERVER_ERROR);
        }

        if (request()->hasFile('image')) {
            $image = Image::make($request->image)->fit(278, 278, null, 'center');
            $path = $user->image->path;
            $image->save(Storage::disk('local')->path("public/images/$path"));
        }

        $user->fill($request->validated());
        $user->update();
        return response()->successWithKey(new UserResource($user), 'user');
    }
}
