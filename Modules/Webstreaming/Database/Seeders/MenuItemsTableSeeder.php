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
        // Model::unguard();

        // $this->call("OthersTableSeeder");

        // ------------------- Menu Admin ----------------------------------------
        // -------------------------------------------------
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Conferencias',
            'url'     => '',
            'route'   => 'conferencias.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-group',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 14,
            ])->save();
        }
        // ------------------- Menu Landing Page ----------------------------------------
    }
}
