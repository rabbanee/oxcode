<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ResetPassword;
use App\Models\User;
use App\Notifications\ResetPasswordRequest;
use App\Notifications\ResetPasswordSuccess;
use App\StatusCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user)
            return response()->error('Email is not found', StatusCode::NOT_FOUND);
        $resetPassword = ResetPassword::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => \Str::random(60)
            ]
        );
        if ($user && $resetPassword)
            $user->notify(
                new ResetPasswordRequest($resetPassword->token)
            );
        return response()->successWithMessage('Email has been sent for resetting your password');
    }

    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $resetPassword = ResetPassword::where('token', $token)
            ->first();
        if (!$resetPassword)
            return response()->error('Reset password token is invalid!');

        if (Carbon::parse($resetPassword->updated_at)->addMinutes(720)->isPast()) {
            $resetPassword->delete();
            return response()->error('Reset password token is invalid!');
        }

        return response()->successWithKey($resetPassword, 'reset_password_token');
    }

    /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed|min:8',
            'token' => 'required|string'
        ]);
        $resetPassword = ResetPassword::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();
        if (!$resetPassword)
            return response()->error('Reset password token is invalid!');
        $user = User::where('email', $resetPassword->email)->first();
        if (!$user)
            return response()->error('Email is not found', StatusCode::NOT_FOUND);
        $user->password = bcrypt($request->password);
        $user->save();
        $resetPassword->delete();
        $user->notify(new ResetPasswordSuccess($resetPassword));
        return response()->successWithKey($user, 'user');
    }
}
