<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //
     public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $user=Auth::user();
        $fecha = Carbon::now();
        $userGoogle = Socialite::driver('google')->user();
        //dd($userGoogle);
       
   $user = User::updateOrCreate([
        'google_id' => $userGoogle->id,
   ], [
        'name' => $userGoogle->name,
        'email' => $userGoogle->email,
        'google_id' => $userGoogle->id,
        'email_verified_at' => $fecha,
        'google_token' => $userGoogle->token,
        
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
    }
   
}
