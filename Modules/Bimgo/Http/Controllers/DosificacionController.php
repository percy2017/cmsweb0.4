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

class DosificacionController extends Controller
{
    public $table = 'bg_dosificacions';
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

    public function index()
    {
        return view('bimgo::bread.index', [
            'dataType' =>  $this->dataType,
            'menuItems' => $this->menuItems
        ]);
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'autorizacion' => 'required|numeric|unique:bg_dosificacions,autorizacion',
            'fecha_emision' => 'required',
            'llave_dosificacion' => 'required',
            'leyenda_lectura' => 'required',
            'actividad_economica' => 'required',
            'nit' => 'required',
            
        ],[
            'autorizacion.required' => 'Autorizacion es requerido',
            'autorizacion.unique' => 'La Autorizacion ya que existe en la base de datos',
            'fecha_emision.required' => 'Fecha de Emisión es requerido',
            'llave_dosificacion.required' => 'Llave de Dosificación es requerido',
            'leyenda_lectura.required' => 'Leyenda es requerido',            
            'actividad_economica.required' => 'Actividad Economica es requerido',
            'nit.required' => 'NIT es requerido'
        ]);
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()]);
        }
           
        //------------------ REGISTRO-------------------------------------
        $data = new $this->dataType->model_name;
        $myrelationships = array();
        foreach ($this->dataRowsAdd as $key) {
            $aux =  $key->field;
         
            switch ($key->type) {
                case 'Traking':
                    $data->$aux = Auth::user()->id;
                    break;
                case 'image':
                    if($request->hasFile($aux)){
                        $image=Storage::disk('public')->put($this->dataType->name.'/'.date('F').date('Y'), $request->file($aux));
                        $data->$aux = $image;
                    }
                    break;
                case 'multiple_images':
                    $image_array = array();
                    if($request->hasFile($aux)){
                        foreach($request->file($aux) as $image)
                        {
                            $array = Storage::disk('public')->put('products/'.date('F').date('Y'), $image);
                            array_push($image_array, $array);
                        }
                        // return $image_array;
                        $data->$aux = json_encode($image_array);
                    }
                    break;    
                case 'relationship':
                    if ($key->details->{'type'} == 'belongsToMany') {
                        if ($request->$aux) {
                            array_push($myrelationships, array($aux => $request->$aux));
                        }
                    }
                    break;
                case 'checkbox':
                    $data->$aux = $request->$aux ? 1 : 0;
                    break;  
                case 'rich_text_box':
                    $data->$aux = htmlspecialchars($request->$aux);
                    break; 
                case 'Slug':
                    $myslug = $key->details->slugify->{'origin'};
                    $data->$aux = Str::slug($request->$myslug);
                    break; 
                default:
                    $data->$aux = $request->$aux;
                    break;
            }
        }
        $data->save();
        if ($myrelationships) {
            foreach ($myrelationships as $key => $valor) {
                $mydata = Voyager::model('DataRow')->where('field', "=", array_key_first($valor))->first();
                $mycolumn = $mydata->details->attributes->{'column'};
                $mykey = $mydata->details->attributes->{'key'};
                // return array_values($valor)[0];
                foreach (array_values($valor)[0] as $item => $value) {
                    $mymodel = new $mydata->details->attributes->{'model'};
                    $mymodel->$mycolumn = $data->id;
                    $mymodel->$mykey = $value;
                    $mymodel->save();
                }
            }
         }
        // --------------------------REGISTRO ---------------------------------------------------

        return $this->show();
    }

    public function show($id = null)
    {
        $dataTypeContent = $this->dataType->model_name::orderBy($this->dataType->details->{'order_column'}, $this->dataType->details->{'order_direction'})->paginate(setting('admin.pagination')); 
        return view('bimgo::bread.show', [
            'dataType' =>  $this->dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
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
        //----------------VALIDATIONS-----------------------------------------
        // $validator = Validator::make($request->all(), [
        //     'attribute' => 'required',
        // ]);
        // if ($validator->fails())
        // {
        //     return response()->json(['error'=>$validator->errors()]);
        // }
        //--------------------------------------------------------------------

        $data = $this->dataType->model_name::find($id);
        $myrelationships = array();
        foreach ($this->dataRowsEdit as $key) {
            $aux =  $key->field;
            switch ($key->type) {
                case 'Traking':
                    $data->$aux = Auth::user()->id;
                    break;
                case 'image':
                    if($request->hasFile($aux)){
                        $image=Storage::disk('public')->put($this->dataType->name.'/'.date('F').date('Y'), $request->file($aux));
                        $data->$aux = $image;
                    }
                    break;
                case 'multiple_images':
                    $image_array = array();
                    if($request->hasFile($aux)){
                        foreach($request->file($aux) as $image)
                        {
                            $array = Storage::disk('public')->put('products/'.date('F').date('Y'), $image);
                            array_push($image_array, $array);
                        }
                        $data->$aux = json_encode($image_array);
                    }
                    break;
                case 'relationship':
                    if ($key->details->{'type'} == 'belongsToMany') {
                        if ($request->$aux) {
                            array_push($myrelationships, array($aux => $request->$aux));
                        }
                    }
                    break;
                case 'checkbox':
                    $data->$aux = $request->$aux ? 1 : 0;
                    break;  
                case 'rich_text_box':
                    $data->$aux = htmlspecialchars($request->$aux);
                    break; 
                case 'Slug':
                    $myslug = $key->details->slugify->{'origin'};
                    $data->$aux = Str::slug($request->$myslug);
                    break; 
                default:
                    $data->$aux = $request->$aux;
                    break;
            }
        }
        $data->save();
        if ($myrelationships) {
            foreach ($myrelationships as $key => $valor) {
                $mydata = Voyager::model('DataRow')->where('field', "=", array_key_first($valor))->first();
                $mycolumn = $mydata->details->attributes->{'column'};
                $mykey = $mydata->details->attributes->{'key'};
                
                $mydata->details->attributes->{'model'}::where($mydata->details->attributes->{'column'}, $data->id)->delete();

                foreach (array_values($valor)[0] as $item => $value) {
                    $mymodel = new $mydata->details->attributes->{'model'};
                    $mymodel->$mycolumn = $data->id;
                    $mymodel->$mykey = $value;
                    $mymodel->save();
                }
            }
         }
        return $this->show();
    }

    public function destroy($id)
    {
        $data = $this->dataType->model_name::find($id)->delete();
        return $this->show();
    }
}
