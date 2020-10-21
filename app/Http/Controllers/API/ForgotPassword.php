<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Controller
{
    public function forgot()
    {
        $credentials = request()->validate(['email' => 'required|email']);

        Password::sendResetLink($credentials);

        return response()->json(["msg" => "Reset password link sent on your email id"]);
        // return $this->respondWithMessage('Reset password link sent on your email id.');
    }

    public function reset()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|string|max:25|confirmed',
        ]);

        Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
        });
    }
}
