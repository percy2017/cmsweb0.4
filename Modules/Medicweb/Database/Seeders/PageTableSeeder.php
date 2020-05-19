<?php

namespace Modules\Medicweb\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;
use App\Block;
use App\Module;

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

        //------------------------------------------------
        $page = Page::create([
            'name'        =>  'index',
            'slug'        =>  'index',
            'user_id'     =>  1,
            'direction'   =>  'medicweb::index',
            'description' =>  'Pagina de destino de MedicWeb v1.0.',
            'details'     =>  json_encode([
                'title' => [
                    'type'   => 'text',
                    'name'   => 'title',
                    'label'  => 'Titulo',
                    'value'  => 'Medical landing page',
                    'width'  => 3
                ],
                'parrafo' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo',
                    'label'  => 'Parrafo',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti hic.',
                    'width'  => 9
                ],
                'space1' => [
                    'type'  => 'space',
                    'name'  => 'space1',
                ],
                'button1' => [
                    'type'   => 'text',
                    'name'   => 'button1',
                    'label'  => 'Text Botton #1',
                    'value'  => 'DOWNLOAD',
                    'width'  => 6
                ],
                'link1' => [
                    'type'   => 'text',
                    'name'   => 'link1',
                    'label'  => 'Link Botton #1',
                    'value'  => 'DOWNLOAD',
                    'width'  => 6
                ],
                'space2' => [
                    'type'  => 'space',
                    'name'  => 'space2',
                ],
                'button2' => [
                    'type'   => 'text',
                    'name'   => 'button2',
                    'label'  => 'Text Botton #2',
                    'value'  => 'DOWNLOAD',
                    'width'  => 6
                ],
                'link2' => [
                    'type'   => 'text',
                    'name'   => 'link2',
                    'label'  => 'Link Botton #2',
                    'value'  => 'DOWNLOAD',
                    'width'  => 6
                ],
                'space3' => [
                    'type'  => 'space',
                    'name'  => 'space2',
                ],
                'image' => [
                    'type'   => 'image',
                    'name'   => 'image',
                    'label'  => 'Imagen Principal',
                    'value'  => null,
                    'width'  => 12
                ]
            ])
        ]);
            $count=1;
            Block::create([
                'name'        => 'features',
                'title'       => 'Features',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Professional treatments',
                        'width'  => 3
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti hic.',
                        'width'  => 9
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'icon1' => [
                        'type'   => 'text',
                        'name'   => 'icon1',
                        'label'  => 'Icono #1',
                        'value'  => 'fas fa-heart blue-text mt-3 fa-3x my-4',
                        'width'  => 3
                    ],
                    'title1' => [
                        'type'   => 'text',
                        'name'   => 'title1',
                        'label'  => 'Titulo #1',
                        'value'  => 'Experience',
                        'width'  => 3
                    ],
                    'parrafo1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo1',
                        'label'  => 'Parrafo #1',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.',
                        'width'  => 6
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'icon2' => [
                        'type'   => 'text',
                        'name'   => 'icon2',
                        'label'  => 'Icono #2',
                        'value'  => 'far fa-eye blue-text mt-3 fa-3x my-4',
                        'width'  => 3
                    ],
                    'title2' => [
                        'type'   => 'text',
                        'name'   => 'title2',
                        'label'  => 'Titulo #2',
                        'value'  => 'Protection',
                        'width'  => 3
                    ],
                    'parrafo2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo2',
                        'label'  => 'Parrafo #2',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.',
                        'width'  => 6
                    ],
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'icon3' => [
                        'type'   => 'text',
                        'name'   => 'icon',
                        'label'  => 'Icono #3',
                        'value'  => 'fas fa-briefcase-medical blue-text mt-3 fa-3x my-4',
                        'width'  => 3
                    ],
                    'title3' => [
                        'type'   => 'text',
                        'name'   => 'title3',
                        'label'  => 'Titulo #3',
                        'value'  => 'Qualifications',
                        'width'  => 3
                    ],
                    'parrafo3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo3',
                        'label'  => 'Parrafo #3',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.',
                        'width'  => 6
                    ]
                ])
            ]);

            Block::create([
                'name'        => 'recuadros',
                'title'       => 'Recuadros',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title1' => [
                        'type'   => 'text',
                        'name'   => 'title1',
                        'label'  => 'Titulo #1',
                        'value'  => 'Aqui el texto',
                        'width'  => 4
                    ],
                    'image1' => [
                        'type'   => 'image',
                        'name'   => 'image1',
                        'label'  => 'Imagen #1',
                        'value'  => null,
                        'width'  => 8
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'title2' => [
                        'type'   => 'text',
                        'name'   => 'title2',
                        'label'  => 'Titulo #2',
                        'value'  => 'Aqui el texto',
                        'width'  => 4
                    ],
                    'image2' => [
                        'type'   => 'image',
                        'name'   => 'image2',
                        'label'  => 'Imagen #2',
                        'value'  => null,
                        'width'  => 8
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'title3' => [
                        'type'   => 'text',
                        'name'   => 'title3',
                        'label'  => 'Titulo #3',
                        'value'  => 'Aqui el texto',
                        'width'  => 4
                    ],
                    'image3' => [
                        'type'   => 'image',
                        'name'   => 'image3',
                        'label'  => 'Imagen #3',
                        'value'  => null,
                        'width'  => 8
                    ],
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'title4' => [
                        'type'   => 'text',
                        'name'   => 'title4',
                        'label'  => 'Titulo #4',
                        'value'  => 'Aqui el texto',
                        'width'  => 4
                    ],
                    'image4' => [
                        'type'   => 'image',
                        'name'   => 'image4',
                        'label'  => 'Imagen #4',
                        'value'  => null,
                        'width'  => 8
                    ],
                ])
            ]);

            Block::create([
                'name'        => 'about',
                'title'       => 'Sobre Nosotros',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'We Provide High Quality services',
                        'width'  => 4
                    ],
                    'sub_title' => [
                        'type'   => 'text',
                        'name'   => 'sub_title',
                        'label'  => 'Sub Titulo',
                        'value'  => 'Visit Our New Clinic in New York.',
                        'width'  => 4
                    ],
                    'button' => [
                        'type'   => 'text',
                        'name'   => 'button',
                        'label'  => 'Text Boton',
                        'value'  => 'CONTACT US NOW',
                        'width'  => 2
                    ],
                    'link' => [
                        'type'   => 'text',
                        'name'   => 'link',
                        'label'  => 'Link del Boton',
                        'value'  => '#',
                        'width'  => 2
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi. Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.',
                        'width'  => 6
                    ],
                    'image' => [
                        'type'   => 'image',
                        'name'   => 'image',
                        'label'  => 'Imagen Princiapl',
                        'value'  => null,
                        'width'  => 6
                    ]
                ])
            ]);

            Block::create([
                'name'        => 'streak',
                'title'       => 'Streak',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'GREAT PEOPLE TRUSTED OUR SERVICES',
                        'width'  => 6
                    ],
                    'image' => [
                        'type'   => 'image',
                        'name'   => 'image',
                        'label'  => 'Imagen Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'text1' => [
                        'type'   => 'text',
                        'name'   => 'text1',
                        'label'  => 'Text #1',
                        'value'  => '+950',
                        'width'  => 4
                    ],
                    'parrafo1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo1',
                        'label'  => 'Parrafo #1',
                        'value'  => 'Lorem ipsum dolor',
                        'width'  => 6
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'text2' => [
                        'type'   => 'text',
                        'name'   => 'text2',
                        'label'  => 'Text #2',
                        'value'  => '+150',
                        'width'  => 4
                    ],
                    'parrafo2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo2',
                        'label'  => 'Parrafo #2',
                        'value'  => 'Lorem ipsum dolor',
                        'width'  => 6
                    ],
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'text3' => [
                        'type'   => 'text',
                        'name'   => 'text3',
                        'label'  => 'Text #3',
                        'value'  => '+85',
                        'width'  => 4
                    ],
                    'parrafo3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo3',
                        'label'  => 'Parrafo #3',
                        'value'  => 'Lorem ipsum dolor',
                        'width'  => 6
                    ],
                    'space4' => [
                        'type'  => 'space',
                        'name'  => 'space4',
                    ],
                    'text4' => [
                        'type'   => 'text',
                        'name'   => 'text4',
                        'label'  => 'Text #4',
                        'value'  => '+6K',
                        'width'  => 4
                    ],
                    'parrafo4' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo4',
                        'label'  => 'Parrafo #4',
                        'value'  => 'Lorem ipsum dolor',
                        'width'  => 6
                    ]
                ])
            ]);

            Block::create([
                'name'        => 'project',
                'title'       => 'Proyectos',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Meet our doctors',
                        'width'  => 6
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'width'  => 6
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'icon1' => [
                        'type'   => 'text',
                        'name'   => 'icon1',
                        'label'  => 'Icono',
                        'value'  => 'far fa-eye fa-2x',
                        'width'  => 6
                    ],
                    'name1' => [
                        'type'   => 'text',
                        'name'   => 'name1',
                        'label'  => 'Nombre',
                        'value'  => 'Jhon',
                        'width'  => 6
                    ],
                    'image1' => [
                        'type'   => 'text',
                        'name'   => 'name1',
                        'label'  => 'Nombre',
                        'value'  => 'Jhon',
                        'width'  => 4
                    ],
                    'parrafo1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo1',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.',
                        'width'  => 8
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'icon2' => [
                        'type'   => 'text',
                        'name'   => 'icon2',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-heartbeat fa-2x',
                        'width'  => 6
                    ],
                    'name2' => [
                        'type'   => 'text',
                        'name'   => 'name2',
                        'label'  => 'Nombre',
                        'value'  => 'Anna',
                        'width'  => 6
                    ],
                    'image2' => [
                        'type'   => 'text',
                        'name'   => 'name2',
                        'label'  => 'Nombre',
                        'value'  => 'Jhon',
                        'width'  => 4
                    ],
                    'parrafo2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo1',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.',
                        'width'  => 8
                    ],
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'icon3' => [
                        'type'   => 'text',
                        'name'   => 'icon3',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-search fa-2x',
                        'width'  => 6
                    ],
                    'name3' => [
                        'type'   => 'text',
                        'name'   => 'name3',
                        'label'  => 'Nombre',
                        'value'  => 'Maria',
                        'width'  => 6
                    ],
                    'image3' => [
                        'type'   => 'text',
                        'name'   => 'name3',
                        'label'  => 'Nombre',
                        'value'  => 'Jhon',
                        'width'  => 4
                    ],
                    'parrafo3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo3',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.',
                        'width'  => 8
                    ],
                ])
            ]);

            Block::create([
                'name'        => 'price',
                'title'       => 'Precios',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Our pricing plans',
                        'width'  => 4
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.',
                        'width'  => 8
                    ],  //------------------------------------------------
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'number1' => [
                        'type'   => 'number',
                        'name'   => 'number1',
                        'label'  => 'Precio',
                        'value'  => '10',
                        'width'  => 6
                    ],
                    'name1' => [
                        'type'   => 'text',
                        'name'   => 'name1',
                        'label'  => 'Nombre',
                        'value'  => 'Basic',
                        'width'  => 6
                    ],  //----------------------------------------------------------
                    'icon1' => [
                        'type'   => 'text',
                        'name'   => 'icon1',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option1' => [
                        'type'   => 'text',
                        'name'   => 'option1',
                        'label'  => 'Texto',
                        'value'  => '20 GB Of Storage',
                        'width'  => 6
                    ],
                    'icon2' => [
                        'type'   => 'text',
                        'name'   => 'icon2',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option2' => [
                        'type'   => 'text',
                        'name'   => 'option2',
                        'label'  => 'Texto',
                        'value'  => '20 GB Of Storage',
                        'width'  => 6
                    ],
                    'icon3' => [
                        'type'   => 'text',
                        'name'   => 'icon3',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option3' => [
                        'type'   => 'text',
                        'name'   => 'option3',
                        'label'  => 'Texto',
                        'value'  => '24h Tech Support',
                        'width'  => 6
                    ],
                    'icon4' => [
                        'type'   => 'text',
                        'name'   => 'icon4',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option4' => [
                        'type'   => 'text',
                        'name'   => 'option4',
                        'label'  => 'Texto',
                        'value'  => '300 GB Bandwidth',
                        'width'  => 6
                    ],
                    'icon5' => [
                        'type'   => 'text',
                        'name'   => 'icon5',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option5' => [
                        'type'   => 'text',
                        'name'   => 'option5',
                        'label'  => 'Texto',
                        'value'  => 'User Management',
                        'width'  => 6
                    ], //---------------------------------------------------------------------------
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'number2' => [
                        'type'   => 'number',
                        'name'   => 'number2',
                        'label'  => 'Precio',
                        'value'  => '20',
                        'width'  => 6
                    ],
                    'name2' => [
                        'type'   => 'text',
                        'name'   => 'name2',
                        'label'  => 'Nombre',
                        'value'  => 'Pro',
                        'width'  => 6
                    ], //------------------------------------------------------------------------
                    'icon6' => [
                        'type'   => 'text',
                        'name'   => 'icon6',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option6' => [
                        'type'   => 'text',
                        'name'   => 'option6',
                        'label'  => 'Texto',
                        'value'  => '20 GB Of Storage',
                        'width'  => 6
                    ],
                    'icon7' => [
                        'type'   => 'text',
                        'name'   => 'icon7',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option7' => [
                        'type'   => 'text',
                        'name'   => 'option7',
                        'label'  => 'Texto',
                        'value'  => '4 Email Accounts',
                        'width'  => 6
                    ],
                    'icon8' => [
                        'type'   => 'text',
                        'name'   => 'icon8',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option8' => [
                        'type'   => 'text',
                        'name'   => 'option8',
                        'label'  => 'Texto',
                        'value'  => '24h Tech Support',
                        'width'  => 6
                    ],
                    'icon9' => [
                        'type'   => 'text',
                        'name'   => 'icon9',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option9' => [
                        'type'   => 'text',
                        'name'   => 'option9',
                        'label'  => 'Texto',
                        'value'  => '300 GB Bandwidth',
                        'width'  => 6
                    ],
                    'icon10' => [
                        'type'   => 'text',
                        'name'   => 'icon10',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option10' => [
                        'type'   => 'text',
                        'name'   => 'option10',
                        'label'  => 'Texto',
                        'value'  => 'User Management',
                        'width'  => 6
                    ], //------------------------------------------------------------------------
                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],
                    'number3' => [
                        'type'   => 'number',
                        'name'   => 'number3',
                        'label'  => 'Precio',
                        'value'  => '30',
                        'width'  => 6
                    ],
                    'name3' => [
                        'type'   => 'text',
                        'name'   => 'name3',
                        'label'  => 'Nombre',
                        'value'  => 'Enterprise',
                        'width'  => 6
                    ], //------------------------------------------------------------------------
                    'icon11' => [
                        'type'   => 'text',
                        'name'   => 'icon11',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option11' => [
                        'type'   => 'text',
                        'name'   => 'option11',
                        'label'  => 'Texto',
                        'value'  => '30 GB Of Storage',
                        'width'  => 6
                    ],
                    'icon12' => [
                        'type'   => 'text',
                        'name'   => 'icon12',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-check',
                        'width'  => 6
                    ],
                    'option12' => [
                        'type'   => 'text',
                        'name'   => 'option12',
                        'label'  => 'Texto',
                        'value'  => '6 Email Accounts',
                        'width'  => 6
                    ],
                    'icon13' => [
                        'type'   => 'text',
                        'name'   => 'icon13',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option13' => [
                        'type'   => 'text',
                        'name'   => 'option13',
                        'label'  => 'Texto',
                        'value'  => '24h Tech Support',
                        'width'  => 6
                    ],
                    'icon14' => [
                        'type'   => 'text',
                        'name'   => 'icon14',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option14' => [
                        'type'   => 'text',
                        'name'   => 'option14',
                        'label'  => 'Texto',
                        'value'  => '500 GB Bandwidth',
                        'width'  => 6
                    ],
                    'icon15' => [
                        'type'   => 'text',
                        'name'   => 'icon15',
                        'label'  => 'Icono',
                        'value'  => 'fas fa-times',
                        'width'  => 6
                    ],
                    'option15' => [
                        'type'   => 'text',
                        'name'   => 'option15',
                        'label'  => 'Texto',
                        'value'  => 'User Management',
                        'width'  => 6
                    ],
                ])
            ]);

            Block::create([
                'name'        => 'contact',
                'title'       => 'Contactos',
                'description' => null,
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo #1',
                        'value'  => 'What Clients said:',
                        'width'  => 12
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'image1' => [
                        'type'   => 'image',
                        'name'   => 'image1',
                        'label'  => 'Image #1',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'text1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'text1',
                        'label'  => 'Texto #1',
                        'value'  => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.',
                        'width'  => 6
                    ],
                    'image2' => [
                        'type'   => 'image',
                        'name'   => 'image2',
                        'label'  => 'Image #2',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'text2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'text2',
                        'label'  => 'Texto #2',
                        'value'  => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.',
                        'width'  => 6
                    ],
                    'image3' => [
                        'type'   => 'image',
                        'name'   => 'image3',
                        'label'  => 'Image #3',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'text3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'text3',
                        'label'  => 'Texto #3',
                        'value'  => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.',
                        'width'  => 6
                    ]
                ])
            ]);

    }
}
