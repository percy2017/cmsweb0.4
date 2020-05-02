<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Module;
use Modules\Webstreaming\Entities\PlanUser;

// Events
use Modules\Webstreaming\Events\SuscriptionUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'captcha' => 'required|captcha'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $module_histream = Module::find(2);

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = 3;
        $user->password = Hash::make($data['password']);
        if($module_histream){
            if ($module_histream->installed){
                $user->phone = $data['phone'];
            }
        }
        $user->save();

        if($module_histream){
            if ($module_histream->installed){
                $status = $data['plan_id'] <= 1 ? 1 : null;
                $plan_user = PlanUser::create([
                    'hs_plan_id' => $data['plan_id'],
                    'user_id' => $user->id,
                    'status' => $status
                ]);
                session(['greetings_histream' => true]);
                // Enviar notificación de nueva suscripción al módulo hiStream
                event(new SuscriptionUser($user));
            }
        }
        return $user;
    }
}
