<?php

namespace Modules\Bimgo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart\CartCondition;
// use Darryldecode\Cart;
// Models
use Modules\Bimgo\Entities\BgProduct;
use Modules\Bimgo\Entities\BgProductDetail;
use Modules\Bimgo\Entities\BgSubCategory;

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

    function category()
    {
        $products = BgProduct::where('published', true)->with(['product_details'])->orderBy('id', 'desc')->get();
        $page = \App\Page::where('slug', 'landing-page-bimgo')->first();
        return view('bimgo::pages.category1', [
            'product'  => $products,
            'page' => $page
        ]);
    }

    static function products()
    {
        $products = BgProduct::where('published', true)->with(['product_details'])->orderBy('id', 'desc')->limit(6)->get();
        return $products;
    }
    static function products2(){
              
        return BgSubCategory::with(['products'])->limit(3)->get();
    }

    static function list_products()
    {
        $products = BgProduct::where('published', true)->orderBy('id', 'desc')->paginate(4);
        return $products;
    }

    function product_details($slug)
    {
        // $page = setting('site.page');
        $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
        
        // Sugerencias de productos
        $tags = json_decode($product->tags);
        $sugerencias = [];
        foreach ($tags as $tag) {
            $product_aux = BgProduct::with(['product_details'])->where('tags', 'like', "%$tag%")->where('id', '<>', $product->id)->get();
            foreach ($product_aux as $item) {
                $existe = false;
                $indice = 0;
                for($i=0; $i<count($sugerencias); $i++){
                    if($sugerencias[$i]['id']==$item->id){
                        $existe = true;
                        $indice = $i;
                    }
                }
                if($existe){
                    $sugerencias[$indice]['coincidencias']++;
                }else{
                    array_push($sugerencias, ['id'=>$item->id, 'name'=>$item->name, 'images'=>$item->images, 'product_details' => $item->product_details, 'stars' => $item->stars, 'tags' => $item->tags, 'slug'=>$item->slug, 'coincidencias'=>1]);
                }
            }
        }
        // Ordernar de mayor a menor coincidencia y convertir a colección
        $sugerencias = json_decode(json_encode(collect($sugerencias)->sortBy('coincidencias')->reverse()->take(4)));
        // ========================

        return view('bimgo::pages.product_details1', [
            'product'  => $product,
            'sugerencias'  => $sugerencias,
            'page' => $product
        ]);
    }
    function cart()
    {
        $page = \App\Page::where('slug', 'landing-page-bimgo')->first();
        return view('bimgo::pages.cart1', [
            'page' => $page
        ]);
    }
    function payment()
    {
        $page = \App\Page::where('slug', 'landing-page-bimgo')->first();
        return view('bimgo::pages.payment1', [
            'page' => $page
        ]);
    }
    function televenta()
    {
        $page = \App\Page::where('slug', 'landing-page-bimgo')->first();
        return view('bimgo::pages.televenta1', [
            'page' => $page
        ]);
    }

    //------------ AJAX-----------------
    function addcart($slug)
    {
        $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
        \Cart::add(
            $product->product_details[0]->id, 
            $product->name, 
            $product->product_details[0]->price, 
            1, 
            array(
                'slug' => $product->slug, 
                'images' => $product->images,
                'description' => $product->description, 
                'type' => $product->product_details[0]->type, 
                'title' => $product->product_details[0]->title, 
                'code' => $product->product_details[0]->code, 
                'price_last' => $product->product_details[0]->price_last, 
                'stock' => $product->product_details[0]->stock),
            array()
        );
        return $product;

    }
    function removecart($slug)
    {
        $product = BgProduct::with(['product_details'])->where('slug', $slug)->first();
        \Cart::remove($product->product_details[0]->id);
        return $product;

    }

    function productdetails($id)
    {
        $product_details = BgProductDetail::find($id);
        return $product_details;

    }
}
