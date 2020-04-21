<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialiteController extends Controller
{
     //function para redirecionar al cuenta social
     public function redirectToProvider($social)
     {
         return Socialite::driver($social)->redirect();
     }
 
     public function handleProviderCallback($social)
     {
         $auth_user = Socialite::driver($social)->user();
         if($auth_user){
             if(!empty($auth_user->email)){
                 $user = User::where('email', $auth_user->email)->first();
                 if($user){
                     Auth::login($user, true);
                 }else{
                     $user = User::create([
                                 'name' => $auth_user->name,
                                 'email' => $auth_user->email ?? trim(str_ireplace(' ', '.', $auth_user->name)).'.'.rand(1001, 9999).'@loginweb.dev',
                                 'password' => Hash::make('password'),
                                 'avatar' => $auth_user->avatar,
                             ]);
 
                     Auth::login($user, true);
                 }
                 return redirect('/');
             }
         }else{
             return 'Ops..!! Hubo Problema el usuario necesita un email.!';
         }
     }
 
}
