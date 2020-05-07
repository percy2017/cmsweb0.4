<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Events
use Modules\Webstreaming\Events\SuscriptionUser;

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
                    $user = new User;
                    $user->name = $auth_user->name;
                    $user->email = $auth_user->email ?? trim(str_ireplace(' ', '.', $auth_user->name)).'.'.rand(1001, 9999).'@loginweb.dev';
                    $user->role_id = 3;
                    $user->password = Hash::make("loginweb_$social");
                    $user->avatar = $auth_user->avatar;
                    $user->save();

                    // Si existe el módulo HiStrean creamos la suscripción
                    $module_histream = Module::find(2);
                    if($module_histream){
                        if ($module_histream->installed){

                            $user->phone = $auth_user->phone;
                            $user->save();

                            PlanUser::create([
                                'hs_plan_id' => 1,
                                'user_id' => $user->id,
                                'status' => 1
                            ]);
                            session(['greetings_histream' => true]);
                            // Enviar notificación de nueva suscripción al módulo hiStream
                            event(new SuscriptionUser($user));
                        }
                    }
                    Auth::login($user, true);
                }
                return redirect('/home');
             }
         }else{
             return 'Ops..!! Hubo Problema el usuario necesita un email.!';
         }
     }
 
}
