<?php

namespace Modules\Bimgo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ViewErrorBag;
use TCG\Voyager\Facades\Voyager;
use Validator;

// Models
use Modules\Bimgo\Entities\BgProduct;
use Modules\Bimgo\Entities\BgProductDetail;
use Modules\Bimgo\Entities\BgCategory;
use Modules\Bimgo\Entities\BgSubCategory;
class BimgoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('bimgo::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('bimgo::create');
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
        return view('bimgo::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('bimgo::edit');
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

    function profile()
    {
        $page = \App\Page::where('slug', 'landing-page-bimgo')->first();
        return view('bimgo::profile3', [
            'page' => $page
        ]);
    }

    public function search(Request $request)
    {
        
        $dataTypeContent = DB::table($request->table)->where($request->search_type, 'like', '%'.$request->search_text.'%')->orderBy('id', 'desc')->paginate(setting('admin.pagination'));
         $dataType = Voyager::model('DataType')->where('slug', '=', $request->table)->first();
        return view('webstreaming::bread.show', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent,
            'search_text' => $request->search_text,
            'search_type' => $request->search_type
        ]);
    }

    public function relationship($id, $table, $key, $type)
    {
        
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();

        switch ($type) {
            case 'list':
                // return $dataType->model_name;
                $dataTypeContent = $dataType->model_name::where($key, $id)->orderBy('id', 'asc')->paginate(setting('admin.pagination')); 
                
                return view('bimgo::bread.show', [
                    'dataType' =>  $dataType,
                    'dataTypeContent' => $dataTypeContent
                ]);
                break;
            case 'create':
                $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
                $dataRowsAdd = Voyager::model('DataRow')->where([['data_type_id', '=', $dataType->id], ['add', "=", 1]])->orderBy('order', 'asc')->get();
        
                return view('bimgo::bread.create', [
                    'dataType' => $dataType,
                    'dataRows'=>$dataRowsAdd,
                    'key' => $key,
                    'id' => $id
                ]);
                break;
            default:
                # code...
                break;
        }
        
    }

    public function view($table, $id)
    {
      
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataRows = Voyager::model('DataRow')->where([['data_type_id', '=', $dataType->id], ['read', "=", 1]])->orderBy('order', 'asc')->get();
        
        $data = $dataType->model_name::where('id', '=', $id)->first();
    
        // return response()->json($dataRows);
        return view('webstreaming::bread.view', [
            'dataType' =>  $dataType,
            'dataRows' => $dataRows,
            'data' => $data

        ]);
    }

    public function deletes($table)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataTypeContent = $dataType->model_name::onlyTrashed()->orderBy('deleted_at', 'asc')->paginate(setting('admin.pagination')); 
    
        // return response()->json($dataTypeContent);
        return view('webstreaming::bread.deletes', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
        
        
    }

    public function recovery($table, $id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataType->model_name::withTrashed()->where('id', '=', $id)->restore();
        $dataTypeContent = $dataType->model_name::onlyTrashed()->orderBy('deleted_at', 'asc')->paginate(setting('admin.pagination')); 
    
        // return response()->json($dataTypeContent);
        return view('webstreaming::bread.deletes', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }



      //------------Carrito AJAX----------------------------------------------------
      //-------------------------------------------------------------
      function addcart($slug, $detail)
      {
          $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
          $datail = BgProductDetail::find($detail);
          \Cart::add(
              $datail->id, 
              $product->name, 
              $datail->price, 
              1, 
              array(
                  'slug' => $product->slug, 
                  'images' => $product->images,
                  'description' => $product->description, 
                  'type' => $datail->type, 
                  'title' => $datail->title, 
                  'code' => $datail->code, 
                  'price_last' => $datail->price_last, 
                  'stock' => $datail->stock),
              array()
          );
          return $product;
  
      }
      function subtractcart($slug, $detail)
      {
          
          $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
          \Cart::update($detail, array(
            'quantity' => -1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
          ));
          return $product;
  
      }
      function removecart($slug, $detail)
      {
          $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
          \Cart::remove($detail);
          return $product;
      }
  
      function productdetails($id)
      {
          $product_details = BgProductDetail::find($id);
          return $product_details;
  
      }
}
