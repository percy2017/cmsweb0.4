<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

// Models
// use Modules\Webstreaming\Entities\PlanUser;

class SuscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        
        return view('webstreaming::suscriptions.index');
    }

    public function list(){
        $registers = DB::table('hs_plan_user as pu')
                                ->join('users as u', 'u.id', 'pu.user_id')
                                ->join('hs_plan_types as pt', 'pt.id', 'pu.hs_plan_type_id')
                                ->select('pu.*', 'u.name as client', 'pt.name as plan')
                                ->where('pu.deleted_at', null)
                                ->paginate(10);
                                // dd($registers);
        return view('webstreaming::suscriptions.partials.list', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('webstreaming::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
