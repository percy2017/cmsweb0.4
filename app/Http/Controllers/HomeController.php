<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                    return view('webstreaming::home');
                default:
                    return view('home');
            }
        }
        return view('home');
    }
}
