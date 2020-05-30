<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\Page;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Storage;
class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page_id)
    {
        $page = Page::where('id', $page_id)->first();
        $blocks = Block::where('page_id', $page_id)->orderBy('position', 'asc')->get();
        $dataType = Voyager::model('DataType')->where('slug', '=', 'blocks')->first();
        // dd($page, $blocks, $dataType);
        // return $page;
        return view('vendor.pages.blocks', [
            'blocks' => $blocks,
            'dataType' =>  $dataType,
            'page' => $page
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $block_id)
    {
        $block = Block::where('id', $block_id)->first();
        $mijson = $block->details;
        foreach(json_decode($block->details, true) as $item => $value)
        {
            if($value['type'] == 'image'){
                // $mijson = str_replace($value['value'], $value['value'], $mijson);
            }else{
                if($value['type'] == 'space'){
                }else{
                    $mijson_aux = json_decode($mijson, true);
                    $mijson_aux[$value['name']]['value'] = $request[$value['name']];
                    $mijson = json_encode($mijson_aux);
                    // $mijson = str_replace($value['value'], $request[$value['name']], $mijson);
                }
            }

            if($request->hasFile($value['name'])){
                $dirimage = Storage::disk('public')->put('blocks/'.date('F').date('Y'), $request->file($value['name']));
                $mijson_aux = json_decode($mijson, true);
                $mijson_aux[$value['name']]['value'] = $dirimage;
                $mijson = json_encode($mijson_aux);
                // $mijson = str_replace($value['value'], $dirimage, $mijson);
            }
            
        }
        // return $mijson;
        $block->details = $mijson;
       // $block->position = $request->position;
        $block->save();
        
        return back()->with([
            'message'    => 'Block '.$block->title.' actualizado.',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function block_ordering($block_id, $order){
        return Block::where('id', $block_id)->update(['position' => $order]);
    }

    // public function move_up($id){
    //     $block = Block::where('id', $id)->first();
    //     $swapOrder = $block->position;

    //     $previousSetting = Block::where('position', '<', $swapOrder)->orderBy('position', 'DESC')->first();
    //     $data = [
    //     'message'    => __('voyager::settings.already_at_top'),
    //     'alert-type' => 'error',
    //     ];
    //     // return $previousSetting;
    //     if (isset($previousSetting->position)) {
    //         $block->position = $previousSetting->position;
    //         $block->save();
    //         $previousSetting->position = $swapOrder;
    //         $previousSetting->save();

    //         $data = [
    //             'message'    => __('voyager::settings.moved_order_up', ['name' => $block->title]),
    //             'alert-type' => 'success',
    //         ];
    //     }

    //     return back()->with($data);
    // }


    // public function move_down($id){
     
    //     $block = Block::where('id', $id)->first();

    //     $swapOrder = $block->position;

    //     $previousSetting = Block::where('position', '>', $swapOrder)->orderBy('position', 'ASC')->first();
    //     $data = [
    //         'message'    => __('voyager::settings.already_at_bottom'),
    //         'alert-type' => 'error',
    //     ];

    //     if (isset($previousSetting->position)) {
    //         $block->position = $previousSetting->position;
    //         $block->save();
    //         $previousSetting->position = $swapOrder;
    //         $previousSetting->save();

    //         $data = [
    //             'message'    => __('voyager::settings.moved_order_down', ['name' => $block->title]),
    //             'alert-type' => 'success',
    //         ];
    //     }

    //     return back()->with($data);
    // }
}
