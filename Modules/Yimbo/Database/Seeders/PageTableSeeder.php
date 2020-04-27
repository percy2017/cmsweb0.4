<?php

namespace Modules\Yimbo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;
use App\Block;
class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::where('user_id', 1)->delete();
        $page = Page::create([
            'name'        =>  'Landing Page Yimbo',
            'slug'        =>  'landingpage-yimbo',
            'user_id'     =>  1,
            'direction'   =>  'yimbo::index',
            'description' =>  'Pagina de destino para yimbo.',
            'details'     =>   null
        ]);
        
    }
}
