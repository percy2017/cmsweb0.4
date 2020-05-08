<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

// Models
use Modules\Webstreaming\Entities\Meeting;

class ApiController extends Controller
{
    public function get_meeting(Request $request){
        $server = setting('histream.server');
        $meeting = Meeting::where('slug', $request->slug)->where('deleted_at', null)->first();
    
        if($meeting){
            $suscription = DB::table('hs_plan_user as pu')
                                ->join('hs_plans as p', 'p.id', 'pu.hs_plan_id')
                                ->select('p.max_person')
                                ->where('user_id', $meeting->user_id)->first();
            return response([
                'data' => [
                    'server' => $server,
                    'id' => $meeting->id,
                    'name' => $meeting->name,
                    'start' => $meeting->start,
                    'finish' => $meeting->finish,
                    'participants_active' => $meeting->participants_active,
                    'max_person' => $suscription->max_person
                ]
            ]);
        }else{
            return response(['data' => ['error' => 'Conferencia no encontrada']]);
        }
        return response(['data' => ['error' => 'Error desconocido']]);
    }
}
