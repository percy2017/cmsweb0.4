<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Models
use Modules\Webstreaming\Entities\Meeting;

use App\Module;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($module = Module::where('installed', 1)->first()) {
            switch ($module->id) {
                case 2:
                    $suscription = DB::table('hs_plan_user as pu')
                                        ->join('hs_plans as p', 'p.id', 'pu.hs_plan_id')
                                        ->select('pu.*', 'p.name', 'p.max_person', 'p.max_time')
                                        ->where('user_id', Auth::user()->id)
                                        ->first();
                    $meetings = Meeting::where('deleted_at', null)
                                        ->where('user_id', Auth::user()->id)
                                        ->where('day', '>=', date('Y-m-d'))
                                        ->orderBy('day', 'ASC')
                                        ->orderBy('start', 'ASC')->limit(5)->get();
                    $meetings_count = Meeting::where('deleted_at', null)->where('user_id', Auth::user()->id)->count();
                    return view('webstreaming::home', compact('suscription', 'meetings', 'meetings_count'));
                default:
                    return view('home');
            }
        }
        return view('home');
    }
}
