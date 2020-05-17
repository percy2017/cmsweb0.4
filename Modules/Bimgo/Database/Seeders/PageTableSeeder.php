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

            $page = Page::create([
                'name'        =>  'category',
                'slug'        =>  'category',
                'user_id'     =>  1,
                'direction'   =>  'bimgo::pages.generica1',
                'description' =>  'Pagina Category predeterminada para comercio electronico v1'
            ]);
                $count=1;
                Block::create([
                    'name'        => 'ecommerce1.category',
                    'title'       => 'Categoria',
                    'description' => 'Categoria',
                    'page_id'     => $page->id,
                    'position'    => $count++,
                    'type'        => 'controller',
                    'details'     => json_encode([
                        'title' => [
                            'type'   => 'text',
                            'name'   => 'title',
                            'label'  => 'Encabezado',
                            'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@category',
                            'width'  => 12
                        ]
                    ])    
                ]);

            $page = Page::create([
                'name'        =>  'product',
                'slug'        =>  'product',
                'user_id'     =>  1,
                'direction'   =>  'bimgo::pages.generica1',
                'description' =>  'Pagina Product predeterminada para comercio electronico v1'
            ]);
                $count=1;
                Block::create([
                    'name'        => 'ecommerce1.product',
                    'title'       => 'Product',
                    'description' => 'Product',
                    'page_id'     => $page->id,
                    'position'    => $count++,
                    'type'        => 'controller',
                    'details'     => json_encode([
                        'title' => [
                            'type'   => 'text',
                            'name'   => 'title',
                            'label'  => 'Encabezado',
                            'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@product',
                            'width'  => 12
                        ]
                    ])    
                ]);

            $page = Page::create([
                'name'        =>  'cart',
                'slug'        =>  'cart',
                'user_id'     =>  1,
                'direction'   =>  'bimgo::pages.generica1',
                'description' =>  'Pagina Cart predeterminada para comercio electronico v1'
            ]);
                $count=1;
                Block::create([
                    'name'        => 'ecommerce1.cart',
                    'title'       => 'Cart',
                    'description' => 'Cart',
                    'page_id'     => $page->id,
                    'position'    => $count++,
                    'type'        => 'controller',
                    'details'     => json_encode([
                        'title' => [
                            'type'   => 'text',
                            'name'   => 'title',
                            'label'  => 'Encabezado',
                            'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@cart',
                            'width'  => 12
                        ]
                    ])    
                ]);

            $page = Page::create([
                'name'        =>  'Tele Venta',
                'slug'        =>  'tele-venta',
                'user_id'     =>  1,
                'direction'   =>  'bimgo::pages.generica1',
                'description' =>  'Pagina Tele Venta predeterminada para comercio electronico v1'
            ]);
                $count=1;
                Block::create([
                    'name'        => 'ecommerce1.tele_venta',
                    'title'       => 'Cart',
                    'description' => 'Cart',
                    'page_id'     => $page->id,
                    'position'    => $count++,
                    'type'        => 'controller',
                    'details'     => json_encode([
                        'title' => [
                            'type'   => 'text',
                            'name'   => 'title',
                            'label'  => 'Encabezado',
                            'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@tele-venta',
                            'width'  => 12
                        ]
                    ])    
                ]);
                $page = Page::create([
                    'name'        =>  'Pagos',
                    'slug'        =>  'pagos',
                    'user_id'     =>  1,
                    'direction'   =>  'bimgo::pages.generica1',
                    'description' =>  'Pagina Pagos predeterminada para comercio electronico v1'
                ]);
                    $count=1;
                    Block::create([
                        'name'        => 'ecommerce1.pagos',
                        'title'       => 'Pagos',
                        'description' => 'Pagos',
                        'page_id'     => $page->id,
                        'position'    => $count++,
                        'type'        => 'controller',
                        'details'     => json_encode([
                            'title' => [
                                'type'   => 'text',
                                'name'   => 'title',
                                'label'  => 'Encabezado',
                                'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@pagos',
                                'width'  => 12
                            ]
                        ])    
                    ]);

                $page = Page::create([
                        'name'        =>  'Gracias',
                        'slug'        =>  'gracias',
                        'user_id'     =>  1,
                        'direction'   =>  'bimgo::pages.generica1',
                        'description' =>  'Pagina Gracias predeterminada para comercio electronico v1'
                    ]);
                        $count=1;
                        Block::create([
                            'name'        => 'ecommerce1.gracias',
                            'title'       => 'Gracias',
                            'description' => 'Gracias',
                            'page_id'     => $page->id,
                            'position'    => $count++,
                            'type'        => 'controller',
                            'details'     => json_encode([
                                'title' => [
                                    'type'   => 'text',
                                    'name'   => 'title',
                                    'label'  => 'Encabezado',
                                    'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@gracias',
                                    'width'  => 12
                                ]
                            ])    
                        ]);
                
                $page = Page::create([
                        'name'        =>  'Profile',
                        'slug'        =>  'profile',
                        'user_id'     =>  1,
                        'direction'   =>  'bimgo::pages.generica1',
                        'description' =>  'Pagina Profile predeterminada para comercio electronico v1'
                    ]);
                        $count=1;
                        Block::create([
                            'name'        => 'ecommerce1.profile',
                            'title'       => 'Profiles',
                            'description' => 'Profiles',
                            'page_id'     => $page->id,
                            'position'    => $count++,
                            'type'        => 'controller',
                            'details'     => json_encode([
                                'title' => [
                                    'type'   => 'text',
                                    'name'   => 'title',
                                    'label'  => 'Encabezado',
                                    'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce1Controller@profile',
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
            $count=1;
            Block::create([
                'name'        => 'ecommerce3.main',
                'title'       => 'Encabezado',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'image' => [
                        'type'   => 'image',
                        'name'   => 'image',
                        'label'  => 'Banner',
                        'value'  => null,
                        'width'  => 12
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],  
                    'text1' => [
                        'type'   => 'text',
                        'name'   => 'text1',
                        'label'  => 'Categoria 1',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link1' => [
                        'type'   => 'text',
                        'name'   => 'link1',
                        'label'  => 'Link 1',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],  
                    'text2' => [
                        'type'   => 'text',
                        'name'   => 'text2',
                        'label'  => 'Categoria 2',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link2' => [
                        'type'   => 'text',
                        'name'   => 'link2',
                        'label'  => 'Link 2',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],  
                    'text3' => [
                        'type'   => 'text',
                        'name'   => 'text3',
                        'label'  => 'Categoria 3',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link3' => [
                        'type'   => 'text',
                        'name'   => 'link3',
                        'label'  => 'Link 3',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'text4' => [
                        'type'   => 'text',
                        'name'   => 'text4',
                        'label'  => 'Categoria 4',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link4' => [
                        'type'   => 'text',
                        'name'   => 'link4',
                        'label'  => 'Link 4',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space4' => [
                        'type'  => 'space',
                        'name'  => 'space4',
                    ],
                    'text5' => [
                        'type'   => 'text',
                        'name'   => 'text5',
                        'label'  => 'Categoria 5',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link5' => [
                        'type'   => 'text',
                        'name'   => 'link5',
                        'label'  => 'Link 5',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space5' => [
                        'type'  => 'space',
                        'name'  => 'space5',
                    ],
                    'text6' => [
                        'type'   => 'text',
                        'name'   => 'text6',
                        'label'  => 'Categoria 6',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'link6' => [
                        'type'   => 'text',
                        'name'   => 'link6',
                        'label'  => 'Link 6',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space6' => [
                        'type'  => 'space',
                        'name'  => 'space6',
                    ],
                    'text7' => [
                        'type'   => 'text',
                        'name'   => 'text7',
                        'label'  => 'Categoria 7',
                        'value'  => null,
                        'width'  => 12
                    ],
                        'text71' => [
                            'type'   => 'text',
                            'name'   => 'text71',
                            'label'  => 'Categoria 71',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'link71' => [
                            'type'   => 'text',
                            'name'   => 'link71',
                            'label'  => 'Link 71',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'text72' => [
                            'type'   => 'text',
                            'name'   => 'text72',
                            'label'  => 'Categoria 72',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'link72' => [
                            'type'   => 'text',
                            'name'   => 'link72',
                            'label'  => 'Link 72',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'text73' => [
                            'type'   => 'text',
                            'name'   => 'text73',
                            'label'  => 'Categoria 73',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'link73' => [
                            'type'   => 'text',
                            'name'   => 'link73',
                            'label'  => 'Link 73',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'text74' => [
                            'type'   => 'text',
                            'name'   => 'text74',
                            'label'  => 'Categoria 74',
                            'value'  => null,
                            'width'  => 3
                        ],
                        'link74' => [
                            'type'   => 'text',
                            'name'   => 'link74',
                            'label'  => 'Link 74',
                            'value'  => null,
                            'width'  => 3
                        ],

                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce3.special',
                'title'       => 'Especial',
                'description' => 'Controlador',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Especial',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@special',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce3.products',
                'title'       => 'Productos',
                'description' => 'Controlador',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Products',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@products',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce3.app',
                'title'       => 'App Download',
                'description' => 'Controlador',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'App Download',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@app',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce3.slider',
                'title'       => 'Slider de Products',
                'description' => 'Controlador',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Slider',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@slider',
                        'width'  => 12
                    ]
                ])    
            ]);
            Block::create([
                'name'        => 'ecommerce3.brands',
                'title'       => 'Brands',
                'description' => 'Controlador',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Brands',
                        'value'  => 'Modules\\Bimgo\\Http\\Controllers\\Ecommerce2@slider',
                        'width'  => 12
                    ]
                ])    
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
