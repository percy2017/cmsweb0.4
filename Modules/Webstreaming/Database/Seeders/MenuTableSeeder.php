<?php

namespace Modules\Webstreaming\Database\Seeders;

use TCG\Voyager\Models\Menu;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\MenuItem;
use Illuminate\Database\Eloquent\Model;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Menu landing page HiStream */
        Menu::firstOrCreate([
            'name' => 'LandingPageHiStream',
        ]);
        $menu = Menu::where('name', 'LandingPageHiStream')->firstOrFail();

   
        
        /** segundo title 2 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'About',
            'url'     => '#about',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }  
        
        /** segundo title 3 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'About',
            'url'     => '#about',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }   

        /** segundo title 4 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Features',
            'url'     => '#features',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 4,
            ])->save();
        }  
        
        /** segundo title 5 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Services',
            'url'     => '#services',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 5,
            ])->save();
        }   

         /** segundo title 6 */
         $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Contact',
            'url'     => '#contact',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 6,
            ])->save();
        }   

        /** Menu landing page HiStream */
        Menu::firstOrCreate([
            'name' => 'LandingPageSocial',
        ]);
        $menu = Menu::where('name', 'LandingPageSocial')->firstOrFail();
         /** primer title 1 */
         $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'facebook',
            'url'     => '#',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fab fa-facebook-f title',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

         /** primer title 2 */
         $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'twitter',
            'url'     => '#',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fab fa-twitter-f title',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }
         /** primer title 3 */
         $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'instagram',
            'url'     => '#',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fab fa-instagram-f title',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }
    }
}
