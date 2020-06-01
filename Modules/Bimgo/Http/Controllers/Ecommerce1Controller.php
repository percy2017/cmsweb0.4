<?php

namespace Modules\Bimgo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use  Modules\Bimgo\Entities\BgProduct;
class Ecommerce1Controller extends Controller
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

    static function products()
    {
        $products = BgProduct::orderBy('id', 'desc')->paginate(6);
        return $products;
    }
    static function products2(){
        
        $products = [];
        $new_products = BgProduct::where('')->orderBy('id', 'desc')->limit(3)->get();
        array_push($products, ['name' => 'Novedades', 'products' => $new_products]);

        $top_sellers = BgProduct::orderBy('id', 'desc')->limit(3)->get();
        array_push($products, ['name' => 'Más vendídos', 'products' => $top_sellers]);
        
        $randoms_products = BgProduct::orderBy('id', 'desc')->limit(3)->get();
        array_push($products, ['name' => 'Populares', 'products' => $randoms_products]);
        
        return json_decode(json_encode($products));
    }

    static function list_products()
    {
        
    }
}
