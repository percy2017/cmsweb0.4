<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();


        $last_menu_item = MenuItem::orderBy('order', 'DESC')->first();
        $cont = $last_menu_item ? $last_menu_item->id : 0;

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Suscripciones',
            'url'     => '',
            'route'   => 'suscripciones.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-logbook',
                'color'      => null,
                'parent_id'  => 1,
                'order'      => $cont++,
            ])->save();
        }


        $HiStreamMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Histream',
            'url'     => '',
        ]);/** HISTREAM - MODULE */
        if (!$HiStreamMenuItem->exists) {
            $HiStreamMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-eercast',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Conferencias',
            'url'     => '',
            'route'   => 'conferencias.index',
        ]);/** 1---- */
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $HiStreamMenuItem->id,
                'order'      => 1,
            ])->save();
        }
       /*  $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Chats',
            'url'     => '',
            'route'   => 'voyager.hs_chats.index',
        ]);   
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $HiStreamMenuItem->id,
                'order'      => 1,
            ])->save();
        } */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Planes',
            'url'     => '',
            'route'   => 'voyager.hs_plans.index',
        ]);/** 3---- */
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $HiStreamMenuItem->id,
                'order'      => 1,
            ])->save();
        }


        /**
         * ------------------------------------------------
         *            Menu  dropdown-toggle => chats
         * -----------------------------------------------
         */
        Menu::firstOrCreate([
            'name' => 'hs_chats',
        ]);
        $menu = Menu::where('name', 'hs_chats')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Crear Nuevo',
            'url'     => 'admin/hs_chats/create',
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Listar',
            'url'     => 'admin/hs_chats/1',
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'divider',
            'url'     => null,
            'route'   => null
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
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'setting',
            'url'     => null,
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_blank',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }
        /**
         * ------------------------------------------------
         *            Menu  dropdown-toggle => planes
         * -----------------------------------------------
         */
        Menu::firstOrCreate([
            'name' => 'hs_plans',
        ]);
        $menu = Menu::where('name', 'hs_plans')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Crear Nuevo',
            'url'     => 'admin/hs_plans/create',
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Listar',
            'url'     => 'admin/hs_plans/1',
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'=> 1,
            ])->save();
        }
        
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'divider',
            'url'     => null,
            'route'   => null
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
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'setting',
            'url'     => null,
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_blank',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }

    }
}
