<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Controllers
use App\Http\Controllers\LoginwebController as Loginweb;

// Models
use Modules\Webstreaming\Entities\Meeting;
use Modules\Webstreaming\Entities\PlanUser;
use Modules\Webstreaming\Entities\Plan;

// Events
use Modules\Webstreaming\Events\JoinMeetUser;

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
        $plan_free = Plan::find(1);
        return view('webstreaming::meetings.index', compact('suscription', 'plan_free'));
    }

    public function list(){
        $meetings = Meeting::where('deleted_at', null)->where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->paginate(10);
        return view('webstreaming::meetings.partials.list', compact('meetings'));
    }

    public function join($slug, $error = null){
        $meeting = Meeting::where('slug', $slug)->where('deleted_at', null)->first();
        $plan_free = Plan::find(1);
        if($meeting){
            $plan_user = DB::table('hs_plan_user as pu')
                            ->join('hs_plans as p', 'p.id', 'pu.hs_plan_id')
                            ->select('pu.*', 'p.max_person')
                            ->where('pu.user_id', $meeting->user_id)
                            ->first();
            if(!$error){
                if($meeting->day.' '.$meeting->start > date('Y-m-d H:i:s') ){
                    $error = 'not_start';
                }
                if($meeting->day.' '.$meeting->finish < date('Y-m-d H:i:s')){
                    $error = 'finish';
                }
                if(Auth::user() && Auth::user()->id == $meeting->user_id){
                    $error = null;
                }    
            }
            return view('webstreaming::meetings.join', compact('meeting', 'plan_free', 'plan_user', 'error'));
        }else{
            $error = 'notfound';
            return view('webstreaming::meetings.join', compact('error'));
        }
    }

    public function joined($type, $id, $quantity = null){
        $meet = Meeting::findOrFail($id);
        switch ($type) {
            case 'increment':
                $meet->participants++;
                break;
            case 'update_active':
                $meet->participants_active =  $quantity;
                break;
            case 'decrement':
                $meet->participants_active = $meet->participants_active > 0 ? $meet->participants_active-- : 0;
                break;
            case 'reject':
                $meet->participants_reject++;
                break;
        }
        $meet->save();
        event(new JoinMeetUser($meet->user_id));
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
        $imagen = (new Loginweb)->save_image('meetings', $request->file('banner'));
        $meeting = Meeting::create([
            'name' => $request->name,
            // 'slug' => Str::slug($request->name),
            'day' => $request->day,
            'start' => $request->start,
            'finish' => $request->finish,
            'user_id' => Auth::user()->id,
            'banner' => $imagen,
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
        $imagen = (new Loginweb)->save_image('meetings', $request->file('banner'));

        $meeting = Meeting::findOrFail($id);
        $meeting->name = $request->name;
        // $meeting->slug = Str::slug($request->name);
        $meeting->day = $request->day;
        $meeting->start = $request->start;
        $meeting->finish = $request->finish;
        if($imagen){
            $meeting->banner = $imagen;
        }
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
