<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify($user_id, Request $request)
    {
        if (!$request->hasValidSignature()) {
            return response()->error('Invalid/Expired url provided.', 401);
        }

        $user = User::findOrFail($user_id);

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return redirect('https://github.com/squest');
    }

    public function resend(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|max:255'
        ]);

        try {
            $user = User::where('email', '=', $request->input('email'))->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            return response()->error('Email is not found.', 404);
        }

        if ($user->hasVerifiedEmail()) {
            return response()->error('Email has already verified.', 400);
        }

        $user->sendEmailVerificationNotification();

        return response()->successWithMessage('Email verification link sent on your email id', 200);
    }
}
