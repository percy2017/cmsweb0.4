<?php

namespace Modules\Bimgo\Database\Seeders;

use App\Page;
use App\Block;
use App\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module=Module::where('id', 4)->first();
        $module->installed=true;
        $module->save();
        Module::where('installed', false)->delete();

        Page::where('user_id', 1)->delete();
        Block::where('deleted_at', null)->delete();
        
        Page::where('user_id', 1)->delete();
        $page = Page::create([
            'name'        =>  'Landing Page BimGo',
            'slug'        =>  'landing-page-bimgo',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::index',
            'description' =>  'Pagina de destino de Bimgo.',
            'details'     =>   json_encode([
                'img1' => [
                    'type'   => 'image',
                    'name'   => 'img1',
                    'label'  => 'Imagen',
                    'value'  => 'imagen1.png',
                    'width'  => 12
                ],
                'title_h1' => [
                    'type'   => 'text',
                    'name'   => 'title_h1',
                    'label'  => 'Titulo ',
                    'value'  => 'Bimgo',
                    'width'  => 6
                ],
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en negrita',
                    'value'  => 'Listo para tu tienda en linea.',
                    'width'  => 6
                ],
                'btn_name' => [
                    'type'   => 'text',
                    'name'   => 'btn_name',
                    'label'  => 'Nombre del boton',
                    'value'  => 'Mas Informacion',
                    'width'  => 6
                ],
                'btn_action' => [
                    'type'   => 'text',
                    'name'   => 'btn_action',
                    'label'  => 'Accion del boton',
                    'value'  => 'null',
                    'width'  => 6
                ],
                'parrafo' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo',
                    'label'  => 'Descripcion',
                    'value'  => 'El comercio electronico, tambien conocido como e-commerce​ o bien comercio por Internet o comercio en linea, consiste en la compra y venta de productos o de servicios a traves de medios electronicos, tales como redes sociales y otras paginas web.',
                    'width'  => 12
                ],
            ])
        ]);

        //---------------------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'Ecommerce-1',
            'slug'        =>  'ecommerce-1',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::pages.ecommerce1',
            'description' =>  'Pagina predeterminada para comercio electronico v1'
        ]);
            $count=1;
            Block::create([
                'name'        => 'ecommerce1.header',
                'title'       => 'Encabezado',
                'description' => 'Encabezado',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Encabezado',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@header',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce1.products',
                'title'       => 'Productos 1',
                'description' => 'Products',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'products' => [
                        'type'   => 'text',
                        'name'   => 'products',
                        'label'  => 'Banner',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@products',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce1.banner',
                'title'       => 'Banner',
                'description' => 'Banner Dinamico',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'banner' => [
                        'type'   => 'text',
                        'name'   => 'banner',
                        'label'  => 'Banner o Afiches',
                        'value'  => null,
                        'width'  => 6
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce1.products2',
                'title'       => 'Productos Tipo 2',
                'description' => 'Header Dinamyc',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'products2' => [
                        'type'   => 'text',
                        'name'   => 'products2',
                        'label'  => 'Banner o Afiches',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@products2',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce1.list_products',
                'title'       => 'Lista Productos',
                'description' => 'Header Dinamyc',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'list_products' => [
                        'type'   => 'text',
                        'name'   => 'list_products',
                        'label'  => 'Banner o Afiches',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@list_products',
                        'width'  => 12
                    ]
                ])    
            ]);
        //--------------------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'Ecommerce-2',
            'slug'        =>  'ecommerce-2',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::pages.ecommerce2',
            'description' =>  'Pagina predeterminada para comercio electronico v2'
        ]);
            $count=1;
            Block::create([
                'name'        => 'ecommerce2.header',
                'title'       => 'Encabezado',
                'description' => 'Header Dinamyc',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Encabezado',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@header',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce2.products',
                'title'       => 'Products',
                'description' => 'Products',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Products',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@Products',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce2.banner',
                'title'       => 'banner',
                'description' => 'Banner',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinmayc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Title',
                        'value'  => null,
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce2.products_select',
                'title'       => 'products_select',
                'description' => 'Products Select',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Products Select',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@products_select',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce2.products_list',
                'title'       => 'products_listt',
                'description' => 'Products List',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Products List',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@products_list',
                        'width'  => 12
                    ]
                ])    
            ]);
            
        //------------------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'Ecommerce-3',
            'slug'        =>  'ecommerce-3',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::pages.ecommerce3',
            'description' =>  'Pagina predeterminada para comercio electronico v3'
        ]);
    
        //------------------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'Ecommerce-4',
            'slug'        =>  'ecommerce-4',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::pages.ecommerce4',
            'description' =>  'Pagina predeterminada para comercio electronico v4'
        ]);
    }
}
