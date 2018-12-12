<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Illuminate\Http\Request;
use App\Http\Traits\SocialCheckService;
use App\Http\Controllers\Controller;
class SocialiteController extends Controller
{
    use SocialCheckService;
    public function register($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function registered(Request $request, $provider)
    {
        if(isset($request->error))
            return redirect()
                ->to('login');
        try {
            $userProvider = Socialite::driver($provider)->stateless()->user();
            $user = $this->checkUser($userProvider, $provider);
            auth()->login($user);
            return redirect()
                ->to('/home');
            // $user->token;
        } catch (Exception $e) {
            return redirect()
                ->to('login');
        }
    }
}
