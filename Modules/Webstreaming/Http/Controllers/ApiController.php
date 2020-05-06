<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// Models
use Modules\Webstreaming\Entities\Meeting;

class ApiController extends Controller
{
    public function get_meeting(Request $request){
        $server = setting('histream.server');
        $meeting = Meeting::where('slug', $request->slug)->where('deleted_at', null)->first();
        if($meeting){
            return response(['data' => ['server' => $server,  'id' => $meeting->id, 'name' => $meeting->name, 'start' => $meeting->start, 'finish' => $meeting->finish]]);
        }else{
            return response(['data' => ['error' => 'not found']]);
        }
        return response(['data' => ['error' => 'know']]);
    }
}
