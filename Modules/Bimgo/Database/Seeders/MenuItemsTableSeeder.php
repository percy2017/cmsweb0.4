<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Menu;
class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'bg_categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_sub_categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_products',
        ]);
        $menu = Menu::where('name', 'bg_products')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_products/create',
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
            'url'     => 'admin/bg_products/1',
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
            'title'   => 'Categoria',
            'url'     => 'admin/bg_categories/create',
            'route'   => null
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
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Sub Categoria',
            'url'     => 'admin/bg_sub_categories/create',
            'route'   => null
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }

        //-------------------------------------------------

        Menu::firstOrCreate([
            'name' => 'bg_branch_offices',
        ]);
        $menu = Menu::where('name', 'bg_branch_offices')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_branch_offices/create',
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
            'url'     => 'admin/bg_branch_offices/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }
         //-------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_product_offices',
        ]);

        //------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_transfers',
        ]);
        $menu = Menu::where('name', 'bg_transfers')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_transfers/create',
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
            'url'     => 'admin/bg_transfers/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }


        //------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_customers',
        ]);
        $menu = Menu::where('name', 'bg_customers')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_customers/create',
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
            'url'     => 'admin/bg_customers/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }


        //-------------------------------------  CAJAS
        Menu::firstOrCreate([
            'name' => 'bg_cashes',
        ]);
        $menu = Menu::where('name', 'bg_cashes')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_cashes/create',
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
            'url'     => 'admin/bg_cashes/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }


        //-------------------------------------  VENTAS
        Menu::firstOrCreate([
            'name' => 'bg_sales',
        ]);
        $menu = Menu::where('name', 'bg_sales')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_sales/create',
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
            'url'     => 'admin/bg_sales/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }


        //-------------------------------------  ASIENTOS
        Menu::firstOrCreate([
            'name' => 'bg_seats',
        ]);
        $menu = Menu::where('name', 'bg_seats')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_seats/create',
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
            'url'     => 'admin/bg_seats/1',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }

        //-------------------------------------  DOSIFICACION
        Menu::firstOrCreate([
            'name' => 'bg_dosificacions',
        ]);
        $menu = Menu::where('name', 'bg_dosificacions')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Nuevo',
            'url'     => 'admin/bg_dosificacions/create',
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
            'url'     => 'admin/bg_dosificacions/1',
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
            'title'   => 'Sucursal',
            'url'     => 'admin/bg_branch_offices/create',
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
                'order'      => 5,
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
                'order'      => 6,
            ])->save();
        }

    }
}
