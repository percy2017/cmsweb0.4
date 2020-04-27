<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;
use App\Block;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidS
     */
    public function run()
    {
        $page = Page::create([
            'name'        =>  'Landing Page HiStream',
            'slug'        =>  'landing-page-histream',
            'user_id'     =>  1,
            'direction'   =>  'webstreaming::index',
            'description' =>  'Pagina de destino de HiStream.',
            'details'     =>   json_encode([

                'imagen' => [
                    'type'   => 'image',
                    'name'   => 'imagen',
                    'label'  => 'Imagen',
                    'value'  => 'images62.jpg',
                    'width'  => 12
                ],


                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Agencia creativa',
                    'width'  => 6
                ],

                'parrafo_h6' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_h6',
                    'label'  => 'Parrafo',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Usted no sabe el dolor, evitar ningún vuelo a gran escala si el escape de salvia Esto permitió que le siguiese, ya que no era que el dolor es dolor de Cómodo.',
                    'width'  => 6
                ],

                'btn_1' => [
                    'type'   => 'text',
                    'name'   => 'btn_1',
                    'label'  => 'Titulo btn #1',
                    'value'  => 'Portafolio',
                    'width'  => 3
                ],

                'btn_action_1' => [
                    'type'   => 'text',
                    'name'   => 'btn_action_1',
                    'label'  => 'Accion del Btn #1',
                    'value'  => '#',
                    'width'  => 3
                ],



                'btn_2' => [
                    'type'   => 'text',
                    'name'   => 'btn_2',
                    'label'  => 'Titulo btn #2',
                    'value'  => 'Mas Informacion',
                    'width'  => 3
                ],

                'btn_action_2' => [
                    'type'   => 'text',
                    'name'   => 'btn_action_2',
                    'label'  => 'Accion del Btn #2',
                    'value'  => '#',
                    'width'  => 3
                ],

            ])
        ]);

        /** block 1 */
        Block::create([
            'name'        => 'lphs_block1',
            'title'       => 'Blocke #1 (Sesion heading  start #1)',
            'description' => 'Seccion  heading  #1 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => 1,
            'details'     => json_encode([

                'title_h3' => [
                    'type'   => 'text',
                    'name'   => 'title_h3',
                    'label'  => 'Titulo h3',
                    'value'  => 'Construye tu marca con nosotros',
                    'width'  => 6
                ],

                'imagen' => [
                    'type'   => 'image',
                    'name'   => 'imagen',
                    'label'  => 'Imagen',
                    'value'  => 'img_photos.png',
                    'width'  => 6
                ],

                'parrafo_1' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                              soluta ratione quisquam, dicta
                              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
                              maiores quibusdam.',
                    'width'  => 12
                ],

                'parrafo_2' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo 2',
                    'value'  => 'Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure,
                              animi excepturi modi aut possimus
                              in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit.',
                    'width'  => 12
                ],

                'parrafo_3' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo 3',
                    'value'  => 'Incidunt eligendi mollitia labore ipsum ex fugit explicabo saepe
                              error neque beatae in, expedita
                              eveniet quae aliquam assumenda voluptatibus!',
                    'width'  => 12
                ],
            ])
        ]);
        /** block 2 */
        Block::create([
            'name'        => 'lphs_block2',
            'title'       => 'Blocke #2 ( Section Awesome features start #2)',
            'description' => 'Seccion Section Awesome features  #2 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => 1,
            'details'     => json_encode([

          
                'imagen' => [
                    'type'   => 'image',
                    'name'   => 'imagen',
                    'label'  => 'Imagen',
                    'value'  => 'Small/admin-new.png',
                    'width'  => 12
                ],
                'title_h3' => [
                    'type'   => 'text',
                    'name'   => 'title_h3',
                    'label'  => 'Titulo h3',
                    'value'  => 'Características impresionantes',
                    'width'  => 4
                ],
                'parrafo_p' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_p',
                    'label'  => 'Parrafo p',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aperitivos, que, para ellos, el rechazo de algunos y el propio dolor, el placer de los deberes de los antepasados, el sabio es cobardía vergonzosa de la mente, se vuelven ciegos para obtenerla.',
                    'width'  => 8
                ],

                'title_1' => [
                    'type'   => 'text',
                    'name'   => 'title_1',
                    'label'  => 'Titulo 1',
                    'value'  => 'Diseño moderno',
                    'width'  => 4
                ],

                'parrafo_1' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayor abierta al mínimo.',
                    'width'  => 8
                ],

                'title_2' => [
                    'type'   => 'text',
                    'name'   => 'title_2',
                    'label'  => 'Titulo 2',
                    'value'  => 'Fácil de personalizar',
                    'width'  => 4
                ],

                'parrafo_2' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo 2',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Para mayor sin duda puede abrir una empresa pequeña.',
                    'width'  => 8
                ],

                'title_3' => [
                    'type'   => 'text',
                    'name'   => 'title_3',
                    'label'  => 'Titulo 3',
                    'value'  => 'Diseños receptivos',
                    'width'  => 4
                ],

                'parrafo_3' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo 3',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayores medios.',
                    'width'  => 8
                ],

                'title_4' => [
                    'type'   => 'text',
                    'name'   => 'title_4',
                    'label'  => 'Titulo 4',
                    'value'  => 'Optimizado para SEO',
                    'width'  => 4
                ],

                'parrafo_4' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo 4',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayores medios.',
                    'width'  => 8
                ],

                'title_5' => [
                    'type'   => 'text',
                    'name'   => 'title_5',
                    'label'  => 'Titulo 5',
                    'value'  => 'Soporte técnico',
                    'width'  => 4
                ],

                'parrafo_5' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_5',
                    'label'  => 'Parrafo 5',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Para mayor sin duda puede abrir una empresa pequeña.',
                    'width'  => 8
                ],

                'title_6' => [
                    'type'   => 'text',
                    'name'   => 'title_6',
                    'label'  => 'Titulo 6',
                    'value'  => 'Alta calidad',
                    'width'  => 4
                ],

                'parrafo_6' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_6',
                    'label'  => 'Parrafo 6',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayor abierta al mínimo.',
                    'width'  => 8
                ],

            ])
        ]);
        /** block 3 */
        Block::create([
            'name'        => 'lphs_block3',
            'title'       => 'Blocke #3 (tutorial video start #3)',
            'description' => 'Seccion tutorial video #3 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => 1,
            'details'     => json_encode([

                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'tutorial video',
                    'width'  => 6
                ],

                'parrafo_p' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_p',
                    'label'  => 'Parrafo',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.',
                    'width'  => 6
                ],

                'urlvideo_1' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_1',
                    'label'  => 'ingrese el link #1',
                    'value'  => 'https://www.youtube.com/embed/A3PDXmYoF5U',
                    'width'  => 6
                ],

                'imagen_1' => [
                    'type'   => 'image',
                    'name'   => 'imagen_1',
                    'label'  => 'Imagen 1 ',
                    'value'  => 'screen-video-1.jpg',
                    'width'  => 6
                ],

                'urlvideo_2' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_2',
                    'label'  => 'ingrese el link #2',
                    'value'  => 'https://www.youtube.com/embed/wTcNtgA6gHs',
                    'width'  => 6
                ],

                'imagen_2' => [
                    'type'   => 'image',
                    'name'   => 'imagen_2',
                    'label'  => 'Imagen 2',
                    'value'  => 'screen-video-2.jpg',
                    'width'  => 6
                ],

                'urlvideo_3' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_3',
                    'label'  => 'ingrese el link #3',
                    'value'  => 'https://www.youtube.com/embed/vlDzYIIOYmM',
                    'width'  => 6
                ],

                'imagen_3' => [
                    'type'   => 'image',
                    'name'   => 'imagen_3',
                    'label'  => 'Imagen 3',
                    'value'  => 'screen-video-3.jpg',
                    'width'  => 6
                ],
            ])
        ]);
        /** block 4 */
        Block::create([
            'name'        => 'lphs_block4',
            'title'       => 'Blocke #4 ( Some facts about us start #4)',
            'description' => 'Seccion  Some facts about us #4 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => 1,
            'details'     => json_encode([

                'imagen' => [
                    'type'   => 'image',
                    'name'   => 'imagen',
                    'label'  => 'Imagen',
                    'value'  => 'img%20%287%29.jpg',
                    'width'  => 12
                ],


                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Algunos hechos sobre nosotros',
                    'width'  => 12
                ],

                'title_1' => [
                    'type'   => 'text',
                    'name'   => 'title_1',
                    'label'  => 'Titulo #1',
                    'value'  => '+950',
                    'width'  => 3
                ],

                'title_2' => [
                    'type'   => 'text',
                    'name'   => 'title_2',
                    'label'  => 'Titulo #2',
                    'value'  => '+150',
                    'width'  => 3
                ],

                'title_3' => [
                    'type'   => 'text',
                    'name'   => 'title_3',
                    'label'  => 'Titulo #3',
                    'value'  => '+85',
                    'width'  => 3
                ],

                'title_4' => [
                    'type'   => 'text',
                    'name'   => 'title_4',
                    'label'  => 'Titulo #4',
                    'value'  => '+246',
                    'width'  => 3
                ],


                'parrafo_1' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo #1',
                    'value'  => 'Clientes felices',
                    'width'  => 3
                ],

                'parrafo_2' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo #2',
                    'value'  => 'Proyectos completados',
                    'width'  => 3
                ],

                'parrafo_3' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo #3',
                    'value'  => 'Premios ganadores',
                    'width'  => 3
                ],

                'parrafo_4' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo #4',
                    'value'  => 'Tazas de café',
                    'width'  => 3
                ],



            ])
        ]);

        /** block 5 */
        Block::create([
            'name'        => 'lphs_block5',
            'title'       => 'Blocke #5 (Our services start #5)',
            'description' => 'Seccion Our services  #5 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => 1,
            'details'     => json_encode([

                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Nuestros servicios',
                    'width'  => 12
                ],

                'title_strong_1' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_1',
                    'label'  => 'Titulo en Negrita 1',
                    'value'  => 'DISEÑO WEB',
                    'width'  => 3
                ],

                'parrafo_1' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo #1 ',
                    'value'  => 'No hay nada de mi alma helvética kufiyya, Wes Anderson CRED no sé cómo la mano de obra del sabio earü excepteur cerveza artesanal. Para un vegano carnicero excepteur polainas vice lomo.',
                    'width'  => 9
                ],
                
                'title_strong_2' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_2',
                    'label'  => 'Titulo en Negrita 2',
                    'value'  => 'DESARROLLO',
                    'width'  => 3
                ],

                'parrafo_2' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo #2 ',
                    'value'  => 'No hay nada de mi alma helvética kufiyya, Wes Anderson CRED no sé cómo la mano de obra del sabio earü excepteur cerveza artesanal. Para un vegano carnicero excepteur polainas vice lomo.',
                    'width'  => 9
                ],

                'title_strong_3' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_3',
                    'label'  => 'Titulo en Negrita 3',
                    'value'  => 'MARCA',
                    'width'  => 3
                ],

                'parrafo_3' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo #3 ',
                    'value'  => 'No hay nada de mi alma helvética kufiyya, Wes Anderson CRED no sé cómo la mano de obra del sabio earü excepteur cerveza artesanal. Para un vegano carnicero excepteur polainas vice lomo.',
                    'width'  => 9
                ],

                'title_strong_4' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_4',
                    'label'  => 'Titulo en Negrita 4',
                    'value'  => ' MÁRKETING',
                    'width'  => 3
                ],

                'parrafo_4' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo #4 ',
                    'value'  => 'No hay nada de mi alma helvética kufiyya, Wes Anderson CRED no sé cómo la mano de obra del sabio earü excepteur cerveza artesanal. Para un vegano carnicero excepteur polainas vice lomo.',
                    'width'  => 9
                ],

                

            ])
        ]);

               /** block 6 */
               Block::create([
                'name'        => 'lphs_block6',
                'title'       => 'Blocke #6 (nuestros planes start #6)',
                'description' => 'Seccion nuestros planes  #6 para la plantilla LPHS',
                'page_id'     => $page->id,
                'position'    => 1,
                'details'     => json_encode([
                    
                    'title_h3' => [
                        'type'   => 'text',
                        'name'   => 'title_h3',
                        'label'  => 'Titulo en Negrita',
                        'value'  => 'Nuestros Planes',
                        'width'  => 6
                    ],  
                    'parrafo' => [
                        'type'   => 'text_area',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo #1',
                        'value'  => 'Escoge el plan que se adapte a ti',
                        'width'  => 6
                    ], 
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],   
                    /**encabezado del plan 1 */
                    'pricing1_title' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_title',
                        'label'  => 'Titulo del plan 1',
                        'value'  => 'Gratis',
                        'width'  => 6
                    ],
                    'pricing1_price1' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_price1',
                        'label'  => 'precio #1 - plan 1',
                        'value'  => '0',
                        'width'  => 6
                    ],  
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    /**contenido del plan 1 */
                    'pricing1_content1' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_content1',
                        'label'  => 'contenido #1 - plan 1',
                        'value'  => '5 conferencias diarias',
                        'width'  => 6
                    ], 
                    'pricing1_content2' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_content2',
                        'label'  => 'contenido #2 - plan 1',
                        'value'  => '10 participantes',
                        'width'  => 6
                    ],
                    'pricing1_content3' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_content3',
                        'label'  => 'contenido #3 - plan 1',
                        'value'  => '1 hora de reunión',
                        'width'  => 4
                    ],
                    'pricing1_content4' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_content4',
                        'label'  => 'contenido #4 - plan 1',
                        'value'  => '',
                        'width'  => 4
                    ],
                    'pricing1_content5' => [
                        'type'   => 'text',
                        'name'   => 'pricing1_content5',
                        'label'  => 'contenido #5 - plan 1',
                        'value'  => '',
                        'width'  => 4
                    ],  
                    'space4' => [
                        'type'  => 'space',
                        'name'  => 'space4',
                    ],
                    /**button name  and action */
                    'btn_name' => [
                        'type'   => 'text',
                        'name'   => 'btn_name',
                        'label'  => 'Nombre del boton',
                        'value'  => 'probar ahora',
                        'width'  => 6
                    ],
                    'btn_action' => [
                        'type'   => 'text',
                        'name'   => 'btn_action',
                        'label'  => 'Accion del boton',
                        'value'  => '/register',
                        'width'  => 6
                    ],
                    'space5' => [
                        'type'  => 'space',
                        'name'  => 'space5',
                    ],

                    /**encabezado del plan 2 */
                    'pricing2_title' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_title',
                        'label'  => 'Titulo del plan 2',
                        'value'  => 'Profesional',
                        'width'  => 6
                    ],
                    'pricing2_price1' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_price1',
                        'label'  => 'precio - plan 2',
                        'value'  => '100',
                        'width'  => 6
                    ], 
                   
                    /**contenido del plan 2 */
                    'pricing2_content1' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_content1',
                        'label'  => 'contenido #1 - plan 2',
                        'value'  => '10 conferencias diarias',
                        'width'  => 6
                    ], 
                    'pricing2_content2' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_content2',
                        'label'  => 'contenido #2 - plan 2',
                        'value'  => '50 participantes',
                        'width'  => 6
                    ],
                    'pricing2_content3' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_content3',
                        'label'  => 'contenido #3 - plan 2',
                        'value'  => '5 horas de reunión',
                        'width'  => 4
                    ],
                    'pricing2_content4' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_content4',
                        'label'  => 'contenido #4 - plan 2',
                        'value'  => '',
                        'width'  => 4
                    ],
                    'pricing2_content5' => [
                        'type'   => 'text',
                        'name'   => 'pricing2_content5',
                        'label'  => 'contenido #5 - plan 2',
                        'value'  => '',
                        'width'  => 4
                    ], 
                    'space8' => [
                        'type'  => 'space',
                        'name'  => 'space8',
                    ], 
                    /**button name  and action */
                    'btn_name2' => [
                        'type'   => 'text',
                        'name'   => 'btn_name2',
                        'label'  => 'Nombre del boton',
                        'value'  => 'probar ahora',
                        'width'  => 6
                    ],
                    'btn_action2' => [
                        'type'   => 'text',
                        'name'   => 'btn_action2',
                        'label'  => 'Accion del boton',
                        'value'  => '/register/2',
                        'width'  => 6
                    ],
                    'space9' => [
                        'type'  => 'space',
                        'name'  => 'space9',
                    ], 
                    /**encabezado del plan 3 */
                    'pricing3_title' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_title',
                        'label'  => 'Titulo del plan 3',
                        'value'  => 'Empresarial',
                        'width'  => 6
                    ],
                    'pricing3_price1' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_price1',
                        'label'  => 'precio - plan 3',
                        'value'  => '200',
                        'width'  => 6
                    ],  
                    /**contenido del plan 3 */
                    'pricing3_content1' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_content1',
                        'label'  => 'contenido #1 - plan 3',
                        'value'  => 'Panel administrativo',
                        'width'  => 6
                    ], 
                    'pricing3_content2' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_content2',
                        'label'  => 'contenido #2 - plan 3',
                        'value'  => 'soporte tecnico',
                        'width'  => 6
                    ],
                    'pricing3_content3' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_content3',
                        'label'  => 'contenido #3 - plan 3',
                        'value'  => 'No hay límite de participantes y duración.',
                        'width'  => 4
                    ],
                    'pricing3_content4' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_content4',
                        'label'  => 'contenido #4 - plan 3',
                        'value'  => '',
                        'width'  => 4
                    ],
                    'pricing3_content5' => [
                        'type'   => 'text',
                        'name'   => 'pricing3_content5',
                        'label'  => 'contenido #5 - plan 3',
                        'value'  => '',
                        'width'  => 4
                    ],  
                    'space10' => [
                        'type'  => 'space',
                        'name'  => 'space10',
                    ], 
                    /**button name  and action */
                    'btn_name3' => [
                        'type'   => 'text',
                        'name'   => 'btn_name3',
                        'label'  => 'Nombre del boton #3',
                        'value'  => 'probar ahora',
                        'width'  => 6
                    ],
                    'btn_action3' => [
                        'type'   => 'text',
                        'name'   => 'btn_action3',
                        'label'  => 'Accion del boton #3',
                        'value'  => '/register/3',
                        'width'  => 6
                    ],
                ])     
            ]);
    }
}
