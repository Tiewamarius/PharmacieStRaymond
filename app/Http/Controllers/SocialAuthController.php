<?php

namespace App\Http\Controllers;


use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{

    public function redirect($provider)
    {
        if ($provider === 'apple') {
            return Socialite::driver('apple')
                ->stateless()
                ->scopes(['name', 'email'])
                ->redirect();
        }

        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        if ($provider === 'apple') {
            $socialUser = Socialite::driver('apple')->stateless()->user();
        } else {
            $socialUser = Socialite::driver($provider)->user();
        }

        $email = $socialUser->getEmail();

        if (!$email) {
            return redirect()->route('login')
                ->with('error', 'Impossible de récupérer votre email.');
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? 'Utilisateur Apple',
                'email' => $email,
                'password' => bcrypt(Str::random(16)),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
