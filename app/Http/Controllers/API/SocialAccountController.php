<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Avatar;
use Carbon\Carbon;

class SocialAccountController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        $targetUrl = Socialite::driver($provider)->stateless()->redirect()->getTargetUrl();
        return response()->successWithKey($targetUrl, 'redirectToProvider');
    }

    /**
     * Obtain the user information from Provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->stateless()->user();
        } catch (\Throwable $th) {
            return response()->error('Failed to login or register');
        }

        if (!$user->token) {
            return response()->error('Failed to login or register');
        }
        // get token
        $appUser = $this->findOrCreateUser($user, $provider);
        $tokenResult = $appUser->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = now()->addWeeks(1);
        $token->save();
        return response()->successWithKey([
            'token' => $tokenResult->accessToken,
            'type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ], 'personal_access_token');
        $appUser->token;
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())->where('provider_name', $provider)->first();

        if ($socialAccount) {
            return $socialAccount->user;
        } else {
            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                $user = new User([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                ]);

                $user->save();
                $user->markEmailAsVerified();
                $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
                Storage::put('public/images/avatars/' . $user->id . '/avatar.png', (string) $avatar);

                $user->image()->create(['path' => "avatars/$user->id/avatar.png", 'thumbnail' => 'true']);
            }

            $user->socialAccounts()->create([
                'provider_id' => $socialUser->getId(),
                'provider_name' => $provider,
            ]);

            return $user;
        }
    }
}
