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
        //--------------------------- MODULO INVENTARIO --------------------------
        //-----------------------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_sub_categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_brands',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_products',
        ]);
            $menu = Menu::where('name', 'bg_products')->firstOrFail();
            $count=1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Listar los Productos',
                'url'     => 'admin/bg_products/1',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nuevo Producto',
                'url'     => 'admin/bg_products/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Categoria',
                'url'     => 'admin/bg_categories/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Sub Categoria',
                'url'     => 'admin/bg_sub_categories/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Marca',
                'url'     => 'admin/bg_brands/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Delivery',
                'url'     => 'admin/bg_deliveries/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
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
                    'order'      => $count++,
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
                    'order'      => $count++,
                ])->save();
            }

        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_product_details', // Detalles del Producto
        ]);
        Menu::firstOrCreate([
            'name' => 'bg_deliveries', // Delivery
        ]);
        //-----------------FIN MODULO INVENTARI-----------    




        //--------------- MODULO VENTAS --------------------------------------
        //---------------------------------------------------------------------
        
        Menu::firstOrCreate([
            'name' => 'bg_branch_offices', //Sucursales
        ]);
         //-------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_product_offices', // Relacion Producto Sucursales
        ]);
        //----------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_transfers', //Tranfers
        ]);
        //---------------------------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_customers', //CLIENTES
        ]);
            $menu = Menu::where('name', 'bg_customers')->firstOrFail();
            $count=1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Listar Clientes',
                'url'     => 'admin/bg_customers/1',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nuevo Cliente',
                'url'     => 'admin/bg_customers/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Locacion',
                'url'     => 'admin/bg_locations/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Region',
                'url'     => 'admin/bg_regions/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
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
                    'order'      => $count++,
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
                    'order'      => $count++,
                ])->save();
            }
        //--------------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_cashes', //CAJAS
        ]);
        //-----------------------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_sales', //Ventas
        ]);
            $menu = Menu::where('name', 'bg_sales')->firstOrFail();
            $count=1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Listar las Ventas',
                'url'     => 'admin/bg_sales/1',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Venta',
                'url'     => 'admin/bg_sales/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nuevo Pago',
                'url'     => 'admin/bg_payments/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Region',
                'url'     => 'admin/bg_regions/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Fidelizacion',
                'url'     => 'admin/bg_loyalties/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
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
                    'order'      => $count++,
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
                    'order'      => $count++,
                ])->save();
            }
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_seats', //ASIENTOS
        ]);
        //---------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_dosificacions', //DOSIFICACION
        ]);
        // ------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'bg_regions', //Regiones
        ]);
         // ------------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_locations', //Ubucaciones
        ]);
         // ------------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_payments', //Pagos
        ]);
         // ------------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_loyalties', //Fidelizacion
        ]);
         // ------------------------------------------------------
         Menu::firstOrCreate([
            'name' => 'bg_sale_details', //Detalle Ventas
        ]);
        
        //------------------ FIN MODULO VENTAS -----------------------



    }
}
