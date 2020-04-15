<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Block;
use App\Page;
use App\User;

class FrontEndController extends Controller
{
    function default()
    {

        $page = setting('site.page');
        $collection = Page::where('slug', $page)->first();

        $blocks = Block::where('page_id', $collection->id)->orderBy('position', 'asc')->get();
        return view($collection->direction, [
            'collection' => json_decode($collection->details, true),
            'page' => $collection,
            'blocks'     => $blocks
        ]);
    }
}
