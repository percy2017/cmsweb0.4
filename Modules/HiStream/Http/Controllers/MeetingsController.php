<?php

namespace Modules\HiStream\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

// Models
use Modules\HiStream\Entities\Meeting;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $meetings = Meeting::where('deleted_at', null)->orderBy('id', 'Desc')->paginate(10);
        return view('histream::meetings.index', compact('meetings'));
    }

    public function join($slug)
    {
        $meeting = Meeting::where('slug', $slug)->where('deleted_at', null)->first();
        if($meeting){
            $name = $meeting->name;
            return view('histream::meetings.join', compact('name'));
        }else{
            return view('histream::meetings.error');
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
        return view('histream::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('histream::edit');
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
