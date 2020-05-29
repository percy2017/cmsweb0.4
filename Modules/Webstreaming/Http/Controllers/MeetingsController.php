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
use Modules\Webstreaming\Entities\MeetingParticipant;
use Modules\Webstreaming\Entities\Participant;

// Events
use Modules\Webstreaming\Events\JoinMeetUser;
use Modules\Webstreaming\Events\ActivityUser;

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
        $meetings = $this::lista_reuniones(Auth::user()->id);
        $cont = 0;
        foreach ($meetings as $item) {
            $aux = DB::table('hs_meeting_participant')
                        ->select('*')
                        ->where('hs_meeting_id', $item->id)
                        ->count();
            $meetings[$cont]->suscriptions = $aux;
            $cont++;
        }
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
            // return $meeting;
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
        event(new ActivityUser());
    }

    public function suscribe(Request $request){
        DB::beginTransaction();
        try {
            $participant = Participant::firstOrNew([
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
            $participant->fill([
                'name' => $request->name,
                'city' => $request->city
            ])->save();

            $suscription = MeetingParticipant::firstOrNew([
                'hs_meeting_id' => $request->meeting_id,
                'hs_participant_id' => $participant->id,
            ]);
            $suscription->fill([
                'join' => date('H:i:s')
            ])->save();
        
            DB::commit();
            session(['suscription_histream' => json_encode($participant)]);
            event(new JoinMeetUser(Meeting::findOrFail($request->meeting_id)->user_id));
            return response()->json($participant);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Ocurrió un error en nuestro servidor.']);
        }
    }

    public function suscribe_join($meeting_id, $suscribe_id, $type){
        $suscription = MeetingParticipant::firstOrNew([
            'hs_meeting_id' => $meeting_id,
            'hs_participant_id' => $suscribe_id,
        ]);
        if($type == 'join'){
            $suscription->fill([
                'join' => date('H:i:s')
            ])->save();
        }else{
            $suscription->fill([
                'exit' => date('H:i:s')
            ])->save();
        }
    }

    public function suscribes_list($meeting_id){
        $suscribs = DB::table('hs_participants as p')
                            ->join('hs_meeting_participant as mp', 'mp.hs_participant_id', 'p.id')
                            ->select('p.*')
                            ->where('hs_meeting_id', $meeting_id)
                            ->get();
        return view('webstreaming::meetings.partials.list_suscribs', compact('suscribs'));
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
        if(!$request->create_now){
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
        }else{
            $plan_free = Plan::find(1);
            $hour_add = intval(date('h', strtotime(date('Y-m-d '.$plan_free->max_time))));
            $date = date('Y-m-d H:i', strtotime('+'.$hour_add.' hour'));

            $meeting = Meeting::create([
                'name' => 'Reunión - '.date('ymd'),
                // 'slug' => Str::slug($request->name),
                'day' => date('Y-m-d'),
                'start' => date('H:i'),
                'finish' => date('H:i', strtotime($date)) > '23:59' ? '23:59' : date('H:i:s', strtotime($date)),
                'user_id' => Auth::user()->id,
                'descriptions' => 'Reunión rápida',
            ]);
        }

        event(new ActivityUser());

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

        event(new ActivityUser());

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

    // ================================================

    public static function lista_reuniones($user_id){
        return DB::table('hs_meetings as m')
                    ->select('m.*', 'm.deleted_at as suscriptions')
                    ->where('deleted_at', null)
                    ->where('user_id', $user_id)
                    ->orderBy('id', 'Desc')->paginate(10);
    }
}
