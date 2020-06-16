<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Menu;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        
        $InventarioMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Inventario',
            'url'     => '',
        ]);
        if (!$InventarioMenuItem->exists) {
            $InventarioMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => null, //menu desplegable
                'order'      => 2,
            ])->save();
        }
        
        $postion = 1;
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Productos',
            'url'     => '',
            'route'   => 'voyager.bg_products.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $InventarioMenuItem->id,
                'order'      => $postion++,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Sucursales',
            'url'     => '',
            'route'   => 'voyager.bg_branch_offices.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $InventarioMenuItem->id,
                'order'      => $postion++,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Traspasos',
            'url'     => '',
            'route'   => 'voyager.bg_transfers.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $InventarioMenuItem->id,
                'order'      => $postion++,
            ])->save();
        }       

        
        //------------------------------------------------------------------------------------
        $VentasMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Ventas',
            'url'     => '',
        ]);
        if (!$VentasMenuItem->exists) {
            $VentasMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-shop',
                'color'      => null,
                'parent_id'  => null, //menu desplegable
                'order'      => 3,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Clientes',
            'url'     => '',
            'route'   => 'voyager.bg_customers.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $VentasMenuItem->id,
                // 'order'      => $postion++,
                'order'      => 1,
            ])->save();
        }
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Ventas',
            'url'     => '',
            'route'   => 'voyager.bg_sales.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $VentasMenuItem->id,
                'order'      => 2,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Asientos',
            'url'     => '',
            'route'   => 'voyager.bg_seats.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $VentasMenuItem->id,
                'order'      => 3,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Dosificacion',
            'url'     => '',
            'route'   => 'voyager.bg_dosificacions.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $VentasMenuItem->id,
                'order'      => 4,
            ])->save();
        }

        //------------------------------------------------------------------------------------
        $ComprasMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Compras',
            'url'     => '',
        ]);
        if (!$ComprasMenuItem->exists) {
            $ComprasMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-archive',
                'color'      => null,
                'parent_id'  => null, //menu desplegable
                'order'      => 4,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Cajas',
            'url'     => '',
            'route'   => 'voyager.bg_cashes.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-double-right',
                'color'      => null,
                'parent_id'  => $ComprasMenuItem->id,
                'order'      =>  1,
            ])->save();
        }
        

            
        /**
         ********************************************
         *      menu Navbar - Landing page Bimgo 
         ********************************************
        */

        Menu::firstOrCreate([
            'name' => 'LandingPageBimgo',
        ]);
        $menu = Menu::where('name', 'LandingPageBimgo')->firstOrFail();

        /** title 1 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'About Us',
            'url'     => '#1',
            'route'   => null,
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
        
        /** title 2 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Article',
            'url'     => '#2',
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
        
        /** title 3 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Memberships',
            'url'     => '#3',
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

        /** title 4 */
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Contant Us',
            'url'     => '#4',
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
    }
}
