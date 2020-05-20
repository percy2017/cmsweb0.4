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
        
        //-----------------------------------------------------------------
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
            $count=1;
            /** block 1 */
            Block::create([
                'name'        => 'lpbg_block1',
                'title'       => 'Blocke 1 (Sesion About Us  1)',
                'description' => 'Seccion  About Us 1 para la plantilla LPBG',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode ([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Por qué elegirnos',
                        'width'  => 6
                    ],
                    'parrafo' => [
                        'type'   => 'text_area',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Abrimos la primera ubicación del lugar en el centro de París, en el cruce de las calles Adelaide y Jefferson. Hemos diseñado una serie de funciones e instalaciones en ocho plantas.',
                        'width'  => 6
                    ],

                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],

                    'icons1' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons1',
                        'label'  => 'Icons 1',
                        'value'  => 'fas fa-wifi orange-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group1'=> [
                        'type'   => 'text',
                        'name'   => 'title_group1',
                        'label'  => 'Titulo grupo1',
                        'value'  => 'Lugar de trabajo',
                        'width'  => 6
                    ],
                    'btn_name_group1'=>[
                        'type'   => 'text',
                        'name'   => 'btn_name_group1',
                        'label'  => 'Nombre del Boton grupo1',
                        'value'  => 'Aprende mas',
                        'width'  => 6
                    ],
                    'btn_action_group1'=>[
                        'type'   => 'text',
                        'name'   => 'btn_action_group1',
                        'label'  => 'Accion del Boton grupo1',
                        'value'  => '/miaccion',
                        'width'  => 6
                    ],
                    'parrafo_group1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group1',
                        'label'  => 'Parrafo del grupo1',
                        'value'  => 'Pero debo explicarle cómo nació toda esta idea equivocada de denunciar el placer y alabar el dolor, una descripción completa del sistema, y ​​exponer las enseñanzas reales del gran explorador de la verdad y se desarrollará en el maestro constructor de la felicidad humana. Nada del placer porque es dolor o evita.',
                        'width'  => 12
                    ],

                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],

                    'icons2' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons2',
                        'label'  => 'Icons 2',
                        'value'  => 'fas fa-coffee blue-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group2' => [
                        'type'   => 'text',
                        'name'   => 'title_group2',
                        'label'  => 'Titulo grupo2',
                        'value'  => 'Un lugar de encuentro',
                        'width'  => 6
                    ],
                    'btn_name_group2'=>[
                        'type'   => 'text',
                        'name'   => 'btn_name_group2',
                        'label'  => 'Nombre del Boton grupo2',
                        'value'  => 'Aprende mas',
                        'width'  => 6
                    ],
                    'btn_action_group2'=>[
                        'type'   => 'text',
                        'name'   => 'btn_action_group2',
                        'label'  => 'Accion del Boton grupo2',
                        'value'  => '/miaccion2',
                        'width'  => 6
                    ],
                    'parrafo_group2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group2',
                        'label'  => 'Parrafo del grupo2',
                        'value'  => 'Pero debo explicarle cómo nació toda esta idea equivocada de denunciar el placer y alabar el dolor, una descripción completa del sistema, y ​​exponer las enseñanzas reales del gran explorador de la verdad y se desarrollará en el maestro constructor de la felicidad humana. Nada del placer porque es dolor o evita.',
                        'width'  => 12
                    ],

                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],

                    'icons3' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons3',
                        'label'  => 'Icons 3',
                        'value'  => 'far fa-grin-beam green-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group3' => [
                        'type'   => 'text',
                        'name'   => 'title_group3',
                        'label'  => 'Titulo grupo3',
                        'value'  => 'Somos amigables para los niños',
                        'width'  => 6
                    ],
                    'btn_name_group3'=>[
                        'type'   => 'text',
                        'name'   => 'btn_name_group3',
                        'label'  => 'Nombre del Boton grupo3',
                        'value'  => 'Aprende mas',
                        'width'  => 6
                    ],
                    'btn_action_group3'=>[
                        'type'   => 'text',
                        'name'   => 'btn_action_group3',
                        'label'  => 'Accion del Boton grupo3',
                        'value'  => '/miaccion3',
                        'width'  => 6
                    ],
                    'parrafo_group3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group3',
                        'label'  => 'Parrafo del grupo3',
                        'value'  => 'Los consideramos dignos, y están acusando a los que odian a los justos, pero, en verdad, y corrompidos por la adulación del presente y los placeres deleniti, están cegados por la codicia de estos dolores, y por los cuales no previó los problemas de los omnis, los deberes de aquellos que desertaron de la falta de espíritu del general, y en el mismo capítulo tienen la culpa, y eso es culpable, y en el mismo capítulo es culpa suya, eso es doloroso y culpable.',
                        'width'  => 12
                    ],
                    
                ])
            ]);
            /** block 2 */
            Block::create([
                'name'        => 'lpbg_block2',
                'title'       => 'Blocke 2 (Sesion Offer  2)',
                'description' => 'Seccion  Offer 2 para la plantilla LPBG',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode ([

                    'imagen' => [
                        'type'   => 'image',
                        'name'   => 'imagen',
                        'label'  => 'Imagen ',
                        'value'  => 'graphics(3).png',
                        'width'  => 6
                    ],
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Lo que obtienes',
                        'width'  => 6
                    ],
                    'parrafo' => [
                        'type'   => 'text_area',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Querer ser un dolor en el cupidotat cillum ha sido criticado en la huida Duis et dolore magna no produce el placer resultante. Los negros excepcionales de cupidatat no son los culpables, lo cual es tranquilizador abandonar sus responsabilidades.',
                        'width'  => 12
                    ],

                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],

                    'icons4' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons4',
                        'label'  => 'Icons 4 ',
                        'value'  => 'fas fa-book-open purple-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group4' => [
                        'type'   => 'text',
                        'name'   => 'title_group4',
                        'label'  => 'Titulo grupo4',
                        'value'  => 'Escritorios para cualquier período',
                        'width'  => 6
                    ],
                    'parrafo_group4' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group4',
                        'label'  => 'Parrafo del grupo4',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],

                    'icons5' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons5',
                        'label'  => 'Icons 5 ',
                        'value'  => 'fas fa-wifi green-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group5' => [
                        'type'   => 'text',
                        'name'   => 'title_group5',
                        'label'  => 'Titulo grupo5',
                        'value'  => 'Internet rápido',
                        'width'  => 6
                    ],
                    'parrafo_group5' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group5',
                        'label'  => 'Parrafo del grupo5',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],

                    'icons6' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons6',
                        'label'  => 'Icons 6 ',
                        'value'  => 'far fa-clock orange-pastel fa-2x',
                        'width'  => 6
                    ],
                    'title_group6' => [
                        'type'   => 'text',
                        'name'   => 'title_group6',
                        'label'  => 'Titulo grupo6',
                        'value'  => 'Acceso 24/7',
                        'width'  => 6
                    ],
                    'parrafo_group6' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group6',
                        'label'  => 'Parrafo del grupo6',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                    'imagen1' => [
                        'type'   => 'image',
                        'name'   => 'imagen1',
                        'label'  => 'Imagen 1',
                        'value'  => 'graphics(4).png',
                        'width'  => 12
                    ],

                    'icons7' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons7',
                        'label'  => 'Icons 7 ',
                        'value'  => 'fas fa-users fa-2x blue-pastel',
                        'width'  => 6
                    ],
                    'title_group7' => [
                        'type'   => 'text',
                        'name'   => 'title_group7',
                        'label'  => 'Titulo grupo7',
                        'value'  => 'Salas de reuniones',
                        'width'  => 6
                    ],
                    'parrafo_group7' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group7',
                        'label'  => 'Parrafo del grupo7',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                    'space4' => [
                        'type'  => 'space',
                        'name'  => 'space4',
                    ],

                    'icons8' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons8',
                        'label'  => 'Icons 8 ',
                        'value'  => 'fas fa-gem fa-2x pink-pastel',
                        'width'  => 6
                    ],
                    'title_group8' => [
                        'type'   => 'text',
                        'name'   => 'title_group8',
                        'label'  => 'Titulo grupo8',
                        'value'  => 'Membresías flexibles',
                        'width'  => 6
                    ],
                    'parrafo_group8' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group8',
                        'label'  => 'Parrafo del grupo8',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                    'space5' => [
                        'type'  => 'space',
                        'name'  => 'space5',
                    ],

                    'icons9' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icons9',
                        'label'  => 'Icons 9 ',
                        'value'  => 'fas fa-utensils fa-2x navy-blue-color',
                        'width'  => 6
                    ],
                    'title_group9' => [
                        'type'   => 'text',
                        'name'   => 'title_group9',
                        'label'  => 'Titulo grupo9',
                        'value'  => 'Cocinas',
                        'width'  => 6
                    ],
                    'parrafo_group9' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group9',
                        'label'  => 'Parrafo del grupo9',
                        'value'  => 'Lorem ipsum dolor sentarse amet, consectetur adipiscing. No puedo manejarlo, para nuestros antepasados, abriré el más pequeño de los clientes a la vez, disfrute del juego.',
                        'width'  => 12
                    ],

                ])

            ]);
            /** block 3 */
            Block::create([
                'name'        => 'lpbg_block3',
                'title'       => 'Blocke 3 (Sesion Articles  3)',
                'description' => 'Seccion  Articles 3 para la plantilla LPBG',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([

                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Las grandes noticias',
                        'width'  => 6
                    ],
                    'parrafo' => [
                        'type'   => 'text_area',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Querer ser un dolor en el cupidotat cillum ha sido criticado en el Duis et dolore magna huir no produce el placer resultante. Los negros excepcionales de cupidatat no son los culpables, lo cual es tranquilizador abandonar sus responsabilidades.',
                        'width'  => 6
                    ],

                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    
                    'imagen_group1' => [
                        'type'   => 'image',
                        'name'   => 'imagen_group1',
                        'label'  => 'Imagen grupo 1',
                        'value'  => '58.jpg',
                        'width'  => 6
                    ],
                    'title_group1' => [
                        'type'   => 'text',
                        'name'   => 'title_group1',
                        'label'  => 'Titulo del grupo 1',
                        'value'  => 'El titulo de la noticia 1',
                        'width'  => 6
                    ],
                    'parrafo_group1' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group1',
                        'label'  => 'Parrafo del grupo 1',
                        'value'  => 'Querer ser un dolor en el cupidotat cillum ha sido criticado en el Duis et dolore magna huir no produce el placer resultante. Los negros excepcionales de cupidatat no son los culpables, lo cual es tranquilizador abandonar sus responsabilidades.',
                        'width'  => 12
                    ],

                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],

                    'imagen_group2' => [
                        'type'   => 'image',
                        'name'   => 'imagen_group2',
                        'label'  => 'Imagen grupo 2',
                        'value'  => '59.jpg',
                        'width'  => 6
                    ],
                    'title_group2' => [
                        'type'   => 'text',
                        'name'   => 'title_group2',
                        'label'  => 'Titulo del grupo 2',
                        'value'  => 'El titulo de la noticia 2',
                        'width'  => 6
                    ],
                    'parrafo_group2' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group2',
                        'label'  => 'Parrafo del grupo 2',
                        'value'  => 'Querer ser un dolor en el cupidotat cillum ha sido criticado en el Duis et dolore magna huir no produce el placer resultante. Los negros excepcionales de cupidatat no son los culpables, lo cual es tranquilizador abandonar sus responsabilidades.',
                        'width'  => 12
                    ],

                    'space3' => [
                        'type'  => 'space',
                        'name'  => 'space3',
                    ],

                    'imagen_group3' => [
                        'type'   => 'image',
                        'name'   => 'imagen_group3',
                        'label'  => 'Imagen grupo 3',
                        'value'  => '60.jpg',
                        'width'  => 6
                    ],
                    'title_group3' => [
                        'type'   => 'text',
                        'name'   => 'title_group3',
                        'label'  => 'Titulo del grupo 3',
                        'value'  => 'El titulo de la noticia 3',
                        'width'  => 6
                    ],
                    'parrafo_group3' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo_group3',
                        'label'  => 'Parrafo del grupo 3',
                        'value'  => 'Querer ser un dolor en el cupidotat cillum ha sido criticado en el Duis et dolore 
                        magna huir no produce el placer resultante. Los negros excepcionales de cupidatat no son los culpables,
                         lo cual es tranquilizador abandonar sus responsabilidades.
                         <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-pastel"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-twitter blue-pastel"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-instagram blue-pastel"> </i>
                        </a>
                        </ul>',
                        'width'  => 12
                    ],

                ])
            ]);
            /** block 4 */
            Block::create([
                'name'        => 'lpbg_block4',
                'title'       => 'Blocke 4 (Sesion Contact Us  4)',
                'description' => 'Seccion  Contact Us 4 para la plantilla LPBG',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                   
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo',
                        'value'  => 'Ponerse en contacto a traves de TeleVenta',
                        'width'  => 6
                    ],
                    'parrafo' => [
                        'type'   => 'text_area',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo',
                        'value'  => 'Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit.',
                        'width'  => 6
                    ],

                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],

                    'imagen' => [
                        'type'   => 'image',
                        'name'   => 'imagen',
                        'label'  => 'Imagen block 4 ',
                        'value'  => '61.jpg',
                        'width'  => 6
                    ],
                    'descripcion' => [
                        'type'   => 'text_area',
                        'name'   => 'descripcion',
                        'label'  => 'Descripcion',
                        'value'  => 'Make an appointment to get the best offer',
                        'width'  => 6
                    ],
                ])
            ]);
            /** block 5 */
            Block::create([
                'name'        => 'lpbg_block5',
                'title'       => 'Blocke 5 (Pasarela de Pago 5)',
                'description' => 'Seccion Pasarela de Pago 5 para la plantilla LPBG',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'title_strong' => [
                        'type'   => 'text',
                        'name'   => 'title_strong',
                        'label'  => 'Titulo en Negrita',
                        'value'  => 'Pasarela de Pago',
                        'width'  => 6
                    ],
                    'description'=> [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => 'Forma de pago',
                        'width'  => 6
                    ],

                    'space1' => [
                        'type'   => 'space',
                        'name'   => 'space1',
                    ],

                    'image1'=> [
                        'type'   => 'image',
                        'name'   => 'image1',
                        'label'  => 'Imagen 1',
                        'value'  => 'default1.png',
                        'width'  => 4
                    ],
                    'image2'=> [
                        'type'   => 'image',
                        'name'   => 'image2',
                        'label'  => 'Imagen 2',
                        'value'  => 'default2.png',
                        'width'  => 4
                    ],
                    'image3'=> [
                        'type'   => 'image',
                        'name'   => 'image3',
                        'label'  => 'Imagen 3',
                        'value'  => 'default3.png',
                        'width'  => 4
                    ],

                    'space2' => [
                        'type'   => 'space',
                        'name'   => 'space2',
                    ],

                    'title1' => [
                        'type'   => 'text',
                        'name'   => 'title1',
                        'label'  => 'Titulo 1',
                        'value'  => 'Tigo Money',
                        'width'  => 4
                    ],
                    'title2' => [
                        'type'   => 'text',
                        'name'   => 'title2',
                        'label'  => 'Titulo 2',
                        'value'  => 'Banco BNB',
                        'width'  => 4
                    ],
                    'title3' => [
                        'type'   => 'text',
                        'name'   => 'title3',
                        'label'  => 'Titulo 3',
                        'value'  => 'Banco Union',
                        'width'  => 4
                    ],

                    'space3' => [
                        'type'   => 'space',
                        'name'   => 'space3',
                    ],

                    'account1' => [
                        'type'   => 'text',
                        'name'   => 'account1',
                        'label'  => 'Cuenta 1',
                        'value'  => 'Nro de Telefono: 78746621',
                        'width'  => 4
                    ],
                    'account2' => [
                        'type'   => 'text',
                        'name'   => 'account2',
                        'label'  => 'Cuenta 2',
                        'value'  => 'Nro de Cuenta: 8500183080',
                        'width'  => 4
                    ],
                    'account3' => [
                        'type'   => 'text',
                        'name'   => 'account3',
                        'label'  => 'Cuenta 3',
                        'value'  => 'Nro de Cuenta: 10000013879305',
                        'width'  => 4
                    ],

                    'space4' => [
                        'type'   => 'space',
                        'name'   => 'space4',
                    ],
                    
                    'urlvideo_1' => [
                        'type'   => 'text',
                        'name'   => 'urlvideo_1',
                        'label'  => 'ingrese el link 1',
                        'value'  => 'https://www.youtube.com/embed/A3PDXmYoF5U',
                        'width'  => 4
                    ],
                    'urlvideo_2' => [
                        'type'   => 'text',
                        'name'   => 'urlvideo_2',
                        'label'  => 'ingrese el link 2',
                        'value'  => 'https://www.youtube.com/embed/wTcNtgA6gHs',
                        'width'  => 4
                    ],
                    'urlvideo_3' => [
                        'type'   => 'text',
                        'name'   => 'urlvideo_3',
                        'label'  => 'ingrese el link 3',
                        'value'  => 'https://www.youtube.com/embed/vlDzYIIOYmM',
                        'width'  => 4
                    ],
                ])    
            ]);

        //---------------------------------------------------------------------------
        //--------------------------Ecommerce 1 -------------------------------------
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
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'tag' => [
                        'type'   => 'text',
                        'name'   => 'tag',
                        'label'  => 'Tag de Cabezera',
                        'value'  => 'bestseller',
                        'width'  => 3
                    ],
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo del Banner',
                        'value'  => 'This is news title',
                        'width'  => 3
                    ],
                    'button' => [
                        'type'   => 'text',
                        'name'   => 'button',
                        'label'  => 'Texto',
                        'value'  => 'READ MORE',
                        'width'  => 3
                    ],
                    'link' => [
                        'type'   => 'text',
                        'name'   => 'link',
                        'label'  => 'Link del Boton',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'image' => [
                        'type'   => 'image',
                        'name'   => 'image',
                        'label'  => 'Imagen del Banner',
                        'value'  => 'image1',
                        'width'  => 4
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo del Banner',
                        'value'  => 'banner',
                        'width'  => 8
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'icon1' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon1',
                        'label'  => 'Icono 1',
                        'value'  => 'fas fa-laptop dark-grey-text mr-2',
                        'width'  => 6
                    ],
                    'name1' => [
                        'type'   => 'text',
                        'name'   => 'name1',
                        'label'  => 'Nombre 1',
                        'value'  => 'Laptos',
                        'width'  => 6
                    ],
                    'icon2' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon2',
                        'label'  => 'Icono 2',
                        'value'  => 'fas fa-mobile-alt dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name2' => [
                        'type'   => 'text',
                        'name'   => 'name2',
                        'label'  => 'Nombre 2',
                        'value'  => 'Smatphone',
                        'width'  => 6
                    ],
                    'icon3' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon3',
                        'label'  => 'Icono 3',
                        'value'  => 'fas fa-tablet-alt dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name3' => [
                        'type'   => 'text',
                        'name'   => 'name3',
                        'label'  => 'Nombre 3',
                        'value'  => 'Tablet',
                        'width'  => 6
                    ],
                    'icon4' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon4',
                        'label'  => 'Icono 4',
                        'value'  => 'fas fa-headphones-alt dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name4' => [
                        'type'   => 'text',
                        'name'   => 'name4',
                        'label'  => 'Nombre 4',
                        'value'  => 'Heahphones',
                        'width'  => 6
                    ],
                    'icon5' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon5',
                        'label'  => 'Icono 5',
                        'value'  => 'fas fa-camera-retro dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name5' => [
                        'type'   => 'text',
                        'name'   => 'name5',
                        'label'  => 'Nombre 5',
                        'value'  => 'Camara',
                        'width'  => 6
                    ],
                    'icon6' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon6',
                        'label'  => 'Icono 6',
                        'value'  => 'fas fa-suitcase dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name6' => [
                        'type'   => 'text',
                        'name'   => 'name6',
                        'label'  => 'Nombre 6',
                        'value'  => 'Accesories',
                        'width'  => 6
                    ],
                    'icon7' => [
                        'type'   => 'select_dropdown',
                        'name'   => 'icon7',
                        'label'  => 'Icono 7',
                        'value'  => 'fas fa-tv dark-grey-text mr-3',
                        'width'  => 6
                    ],
                    'name7' => [
                        'type'   => 'text',
                        'name'   => 'name7',
                        'label'  => 'Nombre 7',
                        'value'  => 'TV',
                        'width'  => 6
                    ],
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
