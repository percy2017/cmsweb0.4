<?php

namespace Modules\Webstreaming\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Models
use App\User;
use Modules\Webstreaming\Entities\Plan;
use Modules\Webstreaming\Entities\PlanUser;

// Events
use Modules\Webstreaming\Events\SuscriptionActiveUser;
use Modules\Webstreaming\Events\PetitionUser;

class SuscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $plans = Plan::where('deleted_at', null)->get();
        return view('webstreaming::suscriptions.index', compact('plans'));
    }

    public function list(){
        $registers = DB::table('hs_plan_user as pu')
                                ->join('users as u', 'u.id', 'pu.user_id')
                                ->join('hs_plans as pt', 'pt.id', 'pu.hs_plan_id')
                                ->select('pu.*', 'u.name as client', 'pt.name as plan')
                                ->where('pu.deleted_at', null)
                                ->orderBy('id', 'DESC')
                                ->paginate(10);
        
        return view('webstreaming::suscriptions.partials.list', compact('registers'));
    }

    public function petition(Request $request){
        $plan_user = PlanUser::find($request->id);
        $user = User::find($plan_user->user_id)->only(['id', 'name', 'phone']);
        if($request->type=='upgrade'){
            $plan_user->hs_plan_id = $request->plan_id;
            $plan_user->status = $request->plan_id == 1 ? 1 : null;
            $plan_user->save();

            // Event
            event(new PetitionUser($user, 'upgrade'));
        }else{
            // Event
            event(new PetitionUser($user, 'request'));
        }

        if($request->ajax){
            return response()->json($plan_user);
        }
        return redirect()->route('conferencias.index')->with(['message' => 'Petición realizada exitosamente.', 'alert-type' => 'success']);
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
        try {
            switch ($request->type) {
                case 'up':
                    $date = date('Y-m-d');

                    $suscription = PlanUser::find($id);
                    $suscription->status = 1;
                    $suscription->start = $date;
                    $suscription->finish = date('Y-m-d', strtotime($date."+1 months"));
                    $suscription->save();
                    $res = $suscription;
                    event(new SuscriptionActiveUser($suscription->user_id));
                    break;
                case 'down':
                    $suscription = PlanUser::find($id);
                    $suscription->status = 2;
                    $suscription->save();
                    $res = $suscription;
                    break;
                case 'delete':
                    $suscription = PlanUser::find($id);
                    // $suscription->status = 2;
                    // $suscription->deleted_at = ;
                    $suscription->delete();
                    $res = $suscription;
                    break;
                default:
                    $suscription = PlanUser::find($id);
                    $suscription->status = 1;
                    $suscription->hs_plan_id = $request->hs_plan_id;
                    $suscription->finish = $request->finish;
                    $suscription->save();
                    $res = $suscription;
                    break;
            }

            if($request->ajax){
                return response()->json($res);
            }
            return redirect()->route('conferencias.index')->with(['message' => 'Conferencia ingresada exitosamente.', 'alert-type' => 'success']);
        } catch (\Throwable $th) {
            return redirect()->route('conferencias.index')->with(['message' => 'Ocurrió un error inesperado.', 'alert-type' => 'error']);
        }
    }

    public function update_user(Request $request){
        DB::beginTransaction();
        try {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            if(!empty($request->password) && !empty($request->password_repeat)){
                $credentials = ['email' => $request->email, 'password' => $request->password];
                if (Auth::attempt($credentials)) {
                    $user->password = Hash::make($request->password_repeat);
                }else{
                    return response()->json(['error' => 'La contraseña actual es incorrecta.']);
                }
            }
            $user->save();
            DB::commit();
            return response()->json($user->only('name', 'phone', 'email'));
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'El Email ya existe, intente con otro.']);
        }
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
