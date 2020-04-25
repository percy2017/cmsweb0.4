<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Models
use Modules\Webstreaming\Entities\Meeting;
use Modules\Webstreaming\Entities\PlanUser;

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
                            ->where('status', '<=', 2)
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
            $name = $meeting->name;
            return view('webstreaming::meetings.join', compact('name'));
        }else{
            return view('webstreaming::meetings.error');
        }
        
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
            'start' => date('Y-m-d H:i', strtotime($request->start)),
            'user_id' => Auth::user()->id
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
        $meeting->start = date('Y-m-d H:i', strtotime($request->start));
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
