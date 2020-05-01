<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Models
use Modules\Webstreaming\Entities\Meeting;
use Modules\Webstreaming\Entities\PlanUser;
use Modules\Webstreaming\Entities\Plan;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $suscription = DB::table('hs_plan_user as pu')
                            ->join('hs_plans as p', 'p.id', 'pu.hs_plan_id')
                            ->select('pu.*', 'p.max_person', 'p.max_time')
                            ->where('user_id', Auth::user()->id)
                            // ->where('status', '<=', 2)
                            ->first();
        return view('webstreaming::meetings.index', compact('suscription'));
    }

    public function list(){
        $meetings = Meeting::where('deleted_at', null)->where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->paginate(10);
        return view('webstreaming::meetings.partials.list', compact('meetings'));
    }

    public function join($slug)
    {
        $meeting = Meeting::where('slug', $slug)->where('deleted_at', null)->first();
        if($meeting){
            $plan = Plan::find(1);
            $plan_user = DB::table('hs_plan_user as pu')
                            ->join('hs_plans as p', 'p.id', 'pu.hs_plan_id')
                            ->select('pu.*', 'p.max_person')
                            ->where('pu.user_id', $meeting->user_id)
                            ->first();
            $name = $meeting->name;
            if(Auth::user() && Auth::user()->id == $meeting->user_id){
                return view('webstreaming::meetings.join', compact('name', 'plan', 'plan_user'));
            }else{
                if($meeting->day.' '.$meeting->start > date('Y-m-d H:i:s')){
                    return redirect('conferencia/error/not_start');
                }
                return view('webstreaming::meetings.join', compact('name', 'plan', 'plan_user'));
            }
            
        }else{
            return redirect('conferencia/error/notfound');
        }
        
    }

    public function error($error){
        return view('webstreaming::meetings.error', compact('error'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $meeting = Meeting::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'day' => $request->day,
            'start' => $request->start,
            'finish' => $request->finish,
            'user_id' => Auth::user()->id,
            'descriptions' => $request->descriptions,
        ]);

        if($request->ajax){
            return response()->json($meeting);
        }

        return redirect()->route('conferencias.index')->with(['message' => 'Conferencia ingresada exitosamente.', 'alert-type' => 'success']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('webstreaming::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('webstreaming::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->name = $request->name;
        // $meeting->slug = Str::slug($request->name);
        $meeting->day = $request->day;
        $meeting->start = $request->start;
        $meeting->finish = $request->finish;
        $meeting->descriptions = $request->descriptions;
        $meeting->save();

        if($request->ajax){
            return response()->json($meeting);
        }

        return redirect()->route('conferencias.index')->with(['message' => 'Conferencia actualizada exitosamente.', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
