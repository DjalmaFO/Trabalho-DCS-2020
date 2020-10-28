<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Discord\DiscordExtendSocialite;

class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $userProvider = Socialite::driver($provider)->user();

        $user = User::firstOrCreate(
            ['email' => $userProvider->getEmail()],
            [
                'name' => $userProvider->getName() ?? $userProvider->getNickname(),
                'password' => 'loginSocial'
            ]
        );

        Auth::login($user);
        return \redirect(\route('dashboard'));
        // $user->token;
    }
}
