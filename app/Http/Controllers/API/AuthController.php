<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAuth;
use App\Http\Requests\RegisterAuth;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\StatusCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Avatar;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function register(RegisterAuth $request)
    {
        try {
            $user = new User($request->validated());

            $user->save();
            $user->sendEmailVerificationNotification();

            $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
            Storage::put('public/images/avatars/' . $user->id . '/avatar.png', (string) $avatar);

            $user->image()->create(['path' => "avatars/$user->id/avatar.png", 'thumbnail' => 'true']);

            return response()->successWithMessage('Successfully created user! please check your email for verification', StatusCode::CREATED);
        } catch (\Throwable $th) {
            return response()->error('Failed created user!', StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(LoginAuth $request)
    {
        try {
            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials))
                return response()->error('Email or password is not correct', StatusCode::UNAUTHORIZED);
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            if ($request->remember_me)
                $token->expires_at = Carbon::now()->addWeeks(1);
            $token->save();
            return response()->successWithKey([
                'token' => $tokenResult->accessToken,
                'type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ], 'personal_access_token');
        } catch (\Throwable $th) {
            return response()->error('Failed to login!', StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        try {
            $request->user()->token()->revoke();
        } catch (\Throwable $th) {
            return response()->error('Failed to logout!', StatusCode::INTERNAL_SERVER_ERROR);
        }
        return response()->successWithMessage('Successfully logged out');
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->successWithKey(new UserResource($request->user()), 'user');
    }
}
