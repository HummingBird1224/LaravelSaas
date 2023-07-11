<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class LoginWithFacebookController extends Controller
{
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
        
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->route('dashboard');
         
            }else{
                $newUser = User::create([
                    // 'name' => $user->name,
                    'first_name' => ' ',
                    'last_name' => ' ',
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => Hash::make(encrypt('Test123456'))
                ]);
        
                Auth::login($newUser);
        
                return redirect()->route('dashboard');
            }
        
        } catch (Exception $e) {
            // dd($e->getMessage());
        }
    }
}