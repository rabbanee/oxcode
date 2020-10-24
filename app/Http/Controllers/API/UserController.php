<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(UpdateUser $request)
    {
        $user = User::select('id')->where('email', $request->input('email'))->get()[0]->id;
        return $request->header('Authorization');
    }
}
