<?php

namespace Modules\Bimgo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Validator;
use Modules\Bimgo\Entities\BgCustomer;
use App\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public $table = 'bg_customers';
    public $dataType;
    public $dataRowsAdd;
    public $dataRowsEdit;
    public $menu;
    public $menuItems;

    public function __construct()
    {
        $this->middleware('auth');
        $this->dataType = Voyager::model('DataType')->where('slug', '=', $this->table)->first();
        $this->dataRowsAdd = Voyager::model('DataRow')->where([['data_type_id', '=', $this->dataType->id], ['add', "=", 1]])->orderBy('order', 'asc')->get();
        $this->dataRowsEdit = Voyager::model('DataRow')->where([['data_type_id', '=', $this->dataType->id], ['edit', "=", 1]])->orderBy('order', 'asc')->get();

        $this->menu = Voyager::model('Menu')->where('name', '=', $this->dataType->name)->first();
        $this->menuItems = Voyager::model('MenuItem')->where('menu_id', '=', $this->menu->id)->orderBy('order', 'asc')->get();
    }

    public function index(Request $request)
    {
        // return view('bimgo::bread.index', [
        //     'dataType' =>  $this->dataType,
        //     'menuItems' => $this->menuItems
        // ]);

        $datosClientes = BgCustomer::whereNull('deleted_at')->paginate(10);

        if ($request->ajax()) {
            return view('bimgo::clientes.partials.listadoClientes', ['datosClientes' => $datosClientes,'dataType' =>  $this->dataType,'menuItems' => $this->menuItems])->render();  
        }
        //return view('inicioFinCaja.index',compact('datosCaja','datoValidarCaja'));
        // return view('formIngreso.index',compact('sucursales','datosContaDiario','fechaActual'));

        return view('bimgo::clientes.index', ['datosClientes' => $datosClientes,'dataType' =>  $this->dataType,'menuItems' => $this->menuItems]);
    }

    public function create()
    {
        return view('bimgo::bread.create', [
            'dataType' => $this->dataType,
            'dataRows'=>$this->dataRowsAdd
        ]); 
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // return $request;
        // ----------------VALIDATIONS-----------------------------------------
        $validator = Validator::make($request->all(), [
            'txtNIT' => 'required|numeric|unique:bg_customers,nit',
            'txtEmpresa' => 'required',
            'txtCliente' => 'required',
            'ddlTipoPersona' => 'required',
            'txtCorreo' => 'required|email|unique:users,email'
        ],[
            'txtNIT.required' => 'NIT es requerido',
            'txtNIT.unique' => 'El NIT ya que existe en la base de datos',
            'txtEmpresa.required' => 'Empresa es requerido',
            'txtCliente.required' => 'Cliente es requerido',
            'ddlTipoPersona.required' => 'Tipo de Persona es requerido',
            'txtCorreo.unique' => 'El email ya existe en la base de datos',
            'txtCorreo.required' => 'El email es requerido',
            'txtCorreo.email' => 'El email debe ser una dirección de correo electrónico válida',
            'txtNIT.numeric' => 'El NIT debe ser un número',
        ]);
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()]);
        }
        // ----------------VALIDATIONS --------------------------------------

        if ($request->ajax()) {
            try {               

                /*REGISTRAR USUARIO*/
                $idUsuario = User::create([
                    'name'            => strtoupper($request['txtCliente']),
                    'email'           => $request['txtCorreo'],
                    'role_id'         => 3,
                    'password'        => Hash::make($request['txtNIT']),
                    
                ])->id;

                /*REGISTRAR CLIENTE*/                
                BgCustomer::create([
                    'name'          => strtoupper($request['txtEmpresa']),
                    'nit'           => $request['txtNIT'],
                    'phone'         => $request['txtCelular'],
                    'phone_number'  => $request['txtTelefono'],
                    'type_person'   => $request['ddlTipoPersona'],
                    'adress'        => $request['txtDireccion'],
                    'user_id'       => $idUsuario
                ]);

                // return response()->json(["Mensaje" => "1","idContaDiario"=> $idContaDiario,"idInicioCaja"=> $idInicioCaja]);
                 
                //DB::commit(); 
                return response()->json(["Mensaje" => "1"]);
                
            } catch (Exception $e) {
                //DB::rollback();
                return response()->json(["Mensaje" => "-1"]);
            }
                    
        }
           
        //------------------ REGISTRO-------------------------------------
        // $data = new $this->dataType->model_name;
        // $myrelationships = array();
        // foreach ($this->dataRowsAdd as $key) {
        //     $aux =  $key->field;
         
        //     switch ($key->type) {
        //         case 'Traking':
        //             $data->$aux = Auth::user()->id;
        //             break;
        //         case 'image':
        //             if($request->hasFile($aux)){
        //                 $image=Storage::disk('public')->put($this->dataType->name.'/'.date('F').date('Y'), $request->file($aux));
        //                 $data->$aux = $image;
        //             }
        //             break;
        //         case 'relationship':
        //             if ($key->details->{'type'} == 'belongsToMany') {
        //                 if ($request->$aux) {
        //                     array_push($myrelationships, array($aux => $request->$aux));
        //                 }
        //             }
        //             break;
        //         case 'checkbox':
        //             $data->$aux = $request->$aux ? 1 : 0;
        //             break;  
        //         case 'rich_text_box':
        //             $data->$aux = htmlspecialchars($request->$aux);
        //             break; 
        //         case 'Slug':
        //             $myslug = $key->details->slugify->{'origin'};
        //             $data->$aux = Str::slug($request->$myslug);
        //             break; 
        //         default:
        //             $data->$aux = $request->$aux;
        //             break;
        //     }
        // }
        // $data->save();
        // if ($myrelationships) {
        //     foreach ($myrelationships as $key => $valor) {
        //         $mydata = Voyager::model('DataRow')->where('field', "=", array_key_first($valor))->first();
        //         $mycolumn = $mydata->details->attributes->{'column'};
        //         $mykey = $mydata->details->attributes->{'key'};
        //         // return array_values($valor)[0];
        //         foreach (array_values($valor)[0] as $item => $value) {
        //             $mymodel = new $mydata->details->attributes->{'model'};
        //             $mymodel->$mycolumn = $data->id;
        //             $mymodel->$mykey = $value;
        //             $mymodel->save();
        //         }
        //     }
        //  }
        // --------------------------REGISTRO ---------------------------------------------------

        // return $this->show();
    }

    public function show($id = null)
    {
        // $dataTypeContent = $this->dataType->model_name::orderBy($this->dataType->details->{'order_column'}, $this->dataType->details->{'order_direction'})->paginate(setting('admin.pagination')); 
        // return view('bimgo::bread.show', [
        //     'dataType' =>  $this->dataType,
        //     'dataTypeContent' => $dataTypeContent
        // ]);
        
    }

    public function edit($id)
    {
        $data = $this->dataType->model_name::find($id);
        return view('bimgo::bread.edit', [
            'dataType' => $this->dataType,
            'dataRows'=> $this->dataRowsEdit,
            'data' => $data
        ]); 
    }

    public function update(Request $request, $id)
    {
        //dd($id);
        //dd($request->all());
        $datoCliente = BgCustomer::find($id);
        $validator = Validator::make($request->all(), [
            'txtNIT' => 'required|numeric|unique:bg_customers,nit,' . $id,
            'txtEmpresa' => 'required',
            'txtCliente' => 'required',
            'ddlTipoPersona' => 'required',
            'txtCorreo' => 'required|email|unique:users,email,' . $datoCliente->user_id
        ],[
            'txtNIT.required' => 'NIT es requerido',
            'txtNIT.unique' => 'El NIT ya que existe en la base de datos',
            'txtEmpresa.required' => 'Empresa es requerido',
            'txtCliente.required' => 'Cliente es requerido',
            'ddlTipoPersona.required' => 'Tipo de Persona es requerido',
            'txtCorreo.unique' => 'El email ya existe en la base de datos',
            'txtCorreo.required' => 'El email es requerido',
            'txtCorreo.email' => 'El email debe ser una dirección de correo electrónico válida',
            'txtNIT.numeric' => 'El NIT debe ser un número',
        ]);
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()]);
        }

        if ($request->ajax()) {
           
            
            $datoUsuario =  User::find($datoCliente->user_id);
            $datoUsuario->name          = strtoupper($request['txtCliente']);
            $datoUsuario->email         = $request['txtCorreo'];
            $datoUsuario->save();

            
            $datoCliente->name          = strtoupper($request['txtEmpresa']);
            $datoCliente->nit           = $request['txtNIT'];
            $datoCliente->phone         = $request['txtCelular'];
            $datoCliente->phone_number  = $request['txtTelefono'];
            $datoCliente->type_person   = $request['ddlTipoPersona'];
            $datoCliente->adress        = $request['txtDireccion'];
            $datoCliente->save();
            return response()->json(["Mensaje" => "1"]);
        
        }
        else{
            return response()->json(["Mensaje" => "0"]);
        }

        // $data = $this->dataType->model_name::find($id);
        // $myrelationships = array();
        // foreach ($this->dataRowsEdit as $key) {
        //     $aux =  $key->field;
        //     switch ($key->type) {
        //         case 'Traking':
        //             $data->$aux = Auth::user()->id;
        //             break;
        //         case 'image':
        //             if($request->hasFile($aux)){
        //                 $image=Storage::disk('public')->put($this->dataType->name.'/'.date('F').date('Y'), $request->file($aux));
        //                 $data->$aux = $image;
        //             }
        //             break;
        //         case 'relationship':
        //             if ($key->details->{'type'} == 'belongsToMany') {
        //                 if ($request->$aux) {
        //                     array_push($myrelationships, array($aux => $request->$aux));
        //                 }
        //             }
        //             break;
        //         case 'checkbox':
        //             $data->$aux = $request->$aux ? 1 : 0;
        //             break;  
        //         case 'rich_text_box':
        //             $data->$aux = htmlspecialchars($request->$aux);
        //             break; 
        //         case 'Slug':
        //             $myslug = $key->details->slugify->{'origin'};
        //             $data->$aux = Str::slug($request->$myslug);
        //             break; 
        //         default:
        //             $data->$aux = $request->$aux;
        //             break;
        //     }
        // }
        // $data->save();
        // if ($myrelationships) {
        //     foreach ($myrelationships as $key => $valor) {
        //         $mydata = Voyager::model('DataRow')->where('field', "=", array_key_first($valor))->first();
        //         $mycolumn = $mydata->details->attributes->{'column'};
        //         $mykey = $mydata->details->attributes->{'key'};
                
        //         $mydata->details->attributes->{'model'}::where($mydata->details->attributes->{'column'}, $data->id)->delete();

        //         foreach (array_values($valor)[0] as $item => $value) {
        //             $mymodel = new $mydata->details->attributes->{'model'};
        //             $mymodel->$mycolumn = $data->id;
        //             $mymodel->$mykey = $value;
        //             $mymodel->save();
        //         }
        //     }
        //  }
        // return $this->show();
    }

    public function destroy($id)
    {
        $data = $this->dataType->model_name::find($id)->delete();
        //return $this->show();
        return response()->json(["Mensaje" => "1"]);
    }
}
