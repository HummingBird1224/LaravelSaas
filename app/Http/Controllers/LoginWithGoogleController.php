<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Exception;

class LoginWithGoogleController extends Controller
{
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->route('dashboard');
       
            }else{
                // dd($user->name);
                $newUser = User::create([
                    // 'name' => $user->name,
                    'first_name' => ' ',
                    'last_name' => ' ',
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make(encrypt('123456dummy'))
                ]);
      
                Auth::login($newUser);
      
                return redirect()->route('dashboard');
            }
      
        } catch (Exception $e) {
            // dd($e->getMessage());
        }
    }
}