<?php

namespace Modules\Webstreaming\Database\Seeders;

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
     * @return voidS
     */
    public function run()
    {
        $module=Module::where('id', 2)->first();
        $module->installed=true;
        $module->save();
        Module::where('installed', false)->delete();
        
        Page::where('user_id', 1)->delete();
        Block::where('deleted_at', null)->delete();

        //---------------------------------------------
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
                    'value'  => 'image1.png',
                    'width'  => 12
                ],
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Histream',
                    'width'  => 6
                ],
                'parrafo_h6' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_h6',
                    'label'  => 'Parrafo',
                    'value'  => 'Nos gustaria que cualquier persona que va de un lado para otro lo utilice. Estamos en todas partes, asi que es muy importante tener una forma sencilla de realizar reuniones sobre la marcha',
                    'width'  => 6
                ],
                'btn_1' => [
                    'type'   => 'text',
                    'name'   => 'btn_1',
                    'label'  => 'Titulo btn 1',
                    'value'  => 'Probar Demo',
                    'width'  => 3
                ],
                'btn_action_1' => [
                    'type'   => 'text',
                    'name'   => 'btn_action_1',
                    'label'  => 'Accion del Btn 1',
                    'value'  => 'https://live.loginweb.dev/demo',
                    'width'  => 3
                ],
                'btn_2' => [
                    'type'   => 'text',
                    'name'   => 'btn_2',
                    'label'  => 'Titulo btn 2',
                    'value'  => 'Mas Informacion',
                    'width'  => 3
                ],
                'btn_action_2' => [
                    'type'   => 'text',
                    'name'   => 'btn_action_2',
                    'label'  => 'Accion del Btn 2',
                    'value'  => 'null',
                    'width'  => 3
                ],

            ])
        ]);

        $count=1;
        /** block 1 */
        Block::create([
            'name'        => 'lphs_block1',
            'title'       => 'Blocke 1 (Sesion heading  start 1)',
            'description' => 'Seccion  heading  1 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'title_h3' => [
                    'type'   => 'text',
                    'name'   => 'title_h3',
                    'label'  => 'Titulo h3',
                    'value'  => 'Reuniones de Histream.',
                    'width'  => 6
                ],
                'imagen_bl1' => [
                    'type'   => 'image',
                    'name'   => 'imagen_bl1',
                    'label'  => 'Imagen',
                    'value'  => 'image3.png',
                    'width'  => 6
                ],
                'parrafo_1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1',
                    'value'  => 'hiStream es una potente solución de reuniones en línea creada para empresas de todos los tamaños. Nuestra experiencia de reunión fácil de usar está disponible en,
                    dispositivos de escritorio y móviles para que pueda tener reuniones confiables y sin estrés en cualquier lugar y en cualquier momento. Con la más alta calidad de audio
                    y vídeo HD, herramientas de colaboración interactivas y capacidades de inteligencia, histream transforma las comunicaciones con una experiencia de reuniones más inteligente, rápida, atractiva y procesable.',
                    'width'  => 12
                ]
            ])
        ]);
        /** block 2 */
        Block::create([
            'name'        => 'lphs_block2',
            'title'       => 'Blocke 2 ( Section Awesome features start 2)',
            'description' => 'Seccion Section Awesome features  2 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'imagen_bl2' => [
                    'type'   => 'image',
                    'name'   => 'imagen_bl2',
                    'label'  => 'Imagen',
                    'value'  => '3.png',
                    'width'  => 12
                ],
                'title_h3' => [
                    'type'   => 'text',
                    'name'   => 'title_h3',
                    'label'  => 'Titulo h3',
                    'value'  => 'Funciones de Histream',
                    'width'  => 4
                ],
                'parrafo_p' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_p',
                    'label'  => 'Parrafo p',
                    'value'  => 'Las herramientas de colaboración integradas facilitan a los participantes compartir contenido para reuniones más interactivas y productivas en tiempo real.',
                    'width'  => 8
                ],

                'icons1' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons1',
                    'label'  => 'Icons 1',
                    'value'  => 'fas fa-edit orange-text fa-2x',
                    'width'  => 3
                ],
                'title_1' => [
                    'type'   => 'text',
                    'name'   => 'title_1',
                    'label'  => 'Titulo 1',
                    'value'  => 'Etherpad',
                    'width'  => 3
                ],
                'parrafo_1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1',
                    'value'  => 'Editar documentos juntos usando Etherpad.',
                    'width'  => 6
                ],
                'icons2' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons2',
                    'label'  => 'Icons 2',
                    'value'  => 'fas fa-cogs orange-text fa-2x',
                    'width'  => 3
                ],
                'title_2' => [
                    'type'   => 'text',
                    'name'   => 'title_2',
                    'label'  => 'Titulo 2',
                    'value'  => 'Fácil de usar',
                    'width'  => 3
                ],
                'parrafo_2' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo 2',
                    'value'  => 'No se requiere incorporación ni capacitación. Comience y únase a las reuniones en segundos.',
                    'width'  => 6
                ],
                'icons3' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons3',
                    'label'  => 'Icons 3',
                    'value'  => 'fas fa-comments orange-text fa-2x',
                    'width'  => 3
                ],
                'title_3' => [
                    'type'   => 'text',
                    'name'   => 'title_3',
                    'label'  => 'Titulo 3',
                    'value'  => 'Chat en equipo',
                    'width'  => 3
                ],
                'parrafo_3' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo 3',
                    'value'  => 'Intercambie mensajes de texto instantáneos durante la llamada.',
                    'width'  => 6
                ],
                'icons4' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons4',
                    'label'  => 'Icons 4',
                    'value'  => 'fas fa-hand-holding-usd orange-text fa-2x',
                    'width'  => 3
                ],
                'title_4' => [
                    'type'   => 'text',
                    'name'   => 'title_4',
                    'label'  => 'Titulo 4',
                    'value'  => 'Valor excepcional',
                    'width'  => 3
                ],
                'parrafo_4' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo 4',
                    'value'  => 'Todas las características que necesita a una fracción del precio de la competencia. Hacemos que sea asequible para todo su equipo organizar grandes reuniones en línea.',
                    'width'  => 6
                ],
                'icons5' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons5',
                    'label'  => 'Icons 5',
                    'value'  => 'fas fa-video orange-text fa-2x',
                    'width'  => 3
                ],
                'title_5' => [
                    'type'   => 'text',
                    'name'   => 'title_5',
                    'label'  => 'Titulo 5',
                    'value'  => 'Grabación de reuniones',
                    'width'  => 3
                ],
                'parrafo_5' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_5',
                    'label'  => 'Parrafo 5',
                    'value'  => 'Grabe algunas reuniones o todas: con capacidades ilimitadas de almacenamiento de grabación y uso compartido, nadie tiene que perderse una reunión',
                    'width'  => 6
                ],
                'icons6' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons6',
                    'label'  => 'Icons 6',
                    'value'  => 'fas fa-file-video orange-text fa-2x',
                    'width'  => 3
                ],
                'title_6' => [
                    'type'   => 'text',
                    'name'   => 'title_6',
                    'label'  => 'Titulo 6',
                    'value'  => 'Uso compartido de pantalla',
                    'width'  => 3
                ],
                'parrafo_6' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_6',
                    'label'  => 'Parrafo 6',
                    'value'  => 'Uso compartido de pantalla, opciones de audio integradas y cámaras de vídeo HD, y mucho más.',
                    'width'  => 6
                ],

            ])
        ]);
        /** block 3 */
        Block::create([
            'name'        => 'lphs_block3',
            'title'       => 'Blocke 3 (tutorial video start 3)',
            'description' => 'Seccion tutorial video 3 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Video Tutorial',
                    'width'  => 6
                ],
                'parrafo_p' => [
                    'type'   => 'text_area',
                    'name'   => 'parrafo_p',
                    'label'  => 'Parrafo',
                    'value'  => 'Mira como puedes Configurar y crear tus Reuniones.',
                    'width'  => 6
                ],
                'urlvideo_1' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_1',
                    'label'  => 'ingrese el link 1',
                    'value'  => 'https://www.youtube.com/embed/A3PDXmYoF5U',
                    'width'  => 6
                ],
                'imagen_1' => [
                    'type'   => 'image',
                    'name'   => 'imagen_1',
                    'label'  => 'Imagen 1 ',
                    'value'  => 'image41.jpg',
                    'width'  => 6
                ],
                'urlvideo_2' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_2',
                    'label'  => 'ingrese el link 2',
                    'value'  => 'https://www.youtube.com/embed/wTcNtgA6gHs',
                    'width'  => 6
                ],
                'imagen_2' => [
                    'type'   => 'image',
                    'name'   => 'imagen_2',
                    'label'  => 'Imagen 2',
                    'value'  => 'image42.jpg',
                    'width'  => 6
                ],
                'urlvideo_3' => [
                    'type'   => 'text',
                    'name'   => 'urlvideo_3',
                    'label'  => 'ingrese el link 3',
                    'value'  => 'https://www.youtube.com/embed/vlDzYIIOYmM',
                    'width'  => 6
                ],
                'imagen_3' => [
                    'type'   => 'image',
                    'name'   => 'imagen_3',
                    'label'  => 'Imagen 3',
                    'value'  => 'image43.jpg',
                    'width'  => 6
                ],
            ])
        ]);
        /** block 4 */
        Block::create([
            'name'        => 'lphs_block4',
            'title'       => 'Blocke 4 ( Some facts about us start 4)',
            'description' => 'Seccion  Some facts about us 4 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'imagen' => [
                    'type'   => 'image',
                    'name'   => 'imagen',
                    'label'  => 'Imagen',
                    'value'  => 'image5.jpg',
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
                    'label'  => 'Titulo 1',
                    'value'  => '+950',
                    'width'  => 3
                ],
                'title_2' => [
                    'type'   => 'text',
                    'name'   => 'title_2',
                    'label'  => 'Titulo 2',
                    'value'  => '+150',
                    'width'  => 3
                ],
                'title_3' => [
                    'type'   => 'text',
                    'name'   => 'title_3',
                    'label'  => 'Titulo 3',
                    'value'  => '+85',
                    'width'  => 3
                ],
                'title_4' => [
                    'type'   => 'text',
                    'name'   => 'title_4',
                    'label'  => 'Titulo 4',
                    'value'  => '+246',
                    'width'  => 3
                ],
                'parrafo_1' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1',
                    'value'  => 'Conferencias',
                    'width'  => 3
                ],
                'parrafo_2' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo 2',
                    'value'  => 'Proyectos completados',
                    'width'  => 3
                ],
                'parrafo_3' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo 3',
                    'value'  => 'Reuniones',
                    'width'  => 3
                ],
                'parrafo_4' => [
                    'type'   => 'text',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo 4',
                    'value'  => 'Usuarios',
                    'width'  => 3
                ],
            ])
        ]);
        /** block 5 */
        Block::create([
            'name'        => 'lphs_block5',
            'title'       => 'Blocke 5 (Our services start 5)',
            'description' => 'Seccion Our services  5 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Beneficios de las videoconferencias',
                    'width'  => 12
                ],
                'title_strong_1' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_1',
                    'label'  => 'Titulo en Negrita 1',
                    'value'  => 'FÁCIL DE USAR',
                    'width'  => 3
                ],
                'parrafo_1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_1',
                    'label'  => 'Parrafo 1 ',
                    'value'  => 'No se requiere incorporación ni capacitación. Comience y únase a las reuniones en segundos.',
                    'width'  => 9
                ],
                'title_strong_2' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_2',
                    'label'  => 'Titulo en Negrita 2',
                    'value'  => 'VALOR EXCEPCIONAL',
                    'width'  => 3
                ],
                'parrafo_2' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_2',
                    'label'  => 'Parrafo 2 ',
                    'value'  => 'Todas las características que necesita a una fracción del precio de la competencia. Hacemos que sea asequible para todo su equipo organizar grandes reuniones en línea.',
                    'width'  => 9
                ],
                'title_strong_3' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_3',
                    'label'  => 'AUMENTAR LA PRODUCTIVIDAD',
                    'value'  => 'MARCA',
                    'width'  => 3
                ],
                'parrafo_3' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_3',
                    'label'  => 'Parrafo 3 ',
                    'value'  => 'Uso compartido de pantalla, opciones de audio integradas y cámaras de vídeo HD, transcripción de reuniones y mucho más.',
                    'width'  => 9
                ],
                'title_strong_4' => [
                    'type'   => 'text',
                    'name'   => 'title_strong_4',
                    'label'  => 'Titulo en Negrita 4',
                    'value'  => 'CONOZCA EN CUALQUIER LUGAR',
                    'width'  => 3
                ],
                'parrafo_4' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo_4',
                    'label'  => 'Parrafo 4 ',
                    'value'  => 'Organice y únase a las reuniones dondequiera que vaya con las aplicaciones de escritorio y móviles de AnyMeeting.',
                    'width'  => 9
                ],
            ])
        ]);
        /** block 6 */
        Block::create([
            'name'        => 'lphs_block6',
            'title'       => 'Blocke 6 (nuestros planes start 6)',
            'description' => 'Seccion nuestros planes  6 para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
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
                    'label'  => 'Parrafo 1',
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
                    'label'  => 'precio 1 - plan 1',
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
                    'label'  => 'contenido 1 - plan 1',
                    'value'  => '5 conferencias diarias',
                    'width'  => 6
                ], 
                'pricing1_content2' => [
                    'type'   => 'text',
                    'name'   => 'pricing1_content2',
                    'label'  => 'contenido 2 - plan 1',
                    'value'  => '10 participantes',
                    'width'  => 6
                ],
                'pricing1_content3' => [
                    'type'   => 'text',
                    'name'   => 'pricing1_content3',
                    'label'  => 'contenido 3 - plan 1',
                    'value'  => '1 hora de reunión',
                    'width'  => 4
                ],
                'pricing1_content4' => [
                    'type'   => 'text',
                    'name'   => 'pricing1_content4',
                    'label'  => 'contenido 4 - plan 1',
                    'value'  => '',
                    'width'  => 4
                ],
                'pricing1_content5' => [
                    'type'   => 'text',
                    'name'   => 'pricing1_content5',
                    'label'  => 'contenido 5 - plan 1',
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
                    'label'  => 'contenido 1 - plan 2',
                    'value'  => '10 conferencias diarias',
                    'width'  => 6
                ], 
                'pricing2_content2' => [
                    'type'   => 'text',
                    'name'   => 'pricing2_content2',
                    'label'  => 'contenido 2 - plan 2',
                    'value'  => '50 participantes',
                    'width'  => 6
                ],
                'pricing2_content3' => [
                    'type'   => 'text',
                    'name'   => 'pricing2_content3',
                    'label'  => 'contenido 3 - plan 2',
                    'value'  => '5 horas de reunión',
                    'width'  => 4
                ],
                'pricing2_content4' => [
                    'type'   => 'text',
                    'name'   => 'pricing2_content4',
                    'label'  => 'contenido 4 - plan 2',
                    'value'  => '',
                    'width'  => 4
                ],
                'pricing2_content5' => [
                    'type'   => 'text',
                    'name'   => 'pricing2_content5',
                    'label'  => 'contenido 5 - plan 2',
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
                    'label'  => 'contenido 1 - plan 3',
                    'value'  => 'Panel administrativo',
                    'width'  => 6
                ], 
                'pricing3_content2' => [
                    'type'   => 'text',
                    'name'   => 'pricing3_content2',
                    'label'  => 'contenido 2 - plan 3',
                    'value'  => 'soporte tecnico',
                    'width'  => 6
                ],
                'pricing3_content3' => [
                    'type'   => 'text',
                    'name'   => 'pricing3_content3',
                    'label'  => 'contenido 3 - plan 3',
                    'value'  => 'No hay límite de participantes y duración.',
                    'width'  => 4
                ],
                'pricing3_content4' => [
                    'type'   => 'text',
                    'name'   => 'pricing3_content4',
                    'label'  => 'contenido 4 - plan 3',
                    'value'  => '',
                    'width'  => 4
                ],
                'pricing3_content5' => [
                    'type'   => 'text',
                    'name'   => 'pricing3_content5',
                    'label'  => 'contenido 5 - plan 3',
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
                    'label'  => 'Nombre del boton 3',
                    'value'  => 'probar ahora',
                    'width'  => 6
                ],
                'btn_action3' => [
                    'type'   => 'text',
                    'name'   => 'btn_action3',
                    'label'  => 'Accion del boton 3',
                    'value'  => '/register/3',
                    'width'  => 6
                ],
            ])     
        ]);
        /** block 7 */
        Block::create([
            'name'        => 'lphs_block7',
            'title'       => 'Blocke 7 (Pasarela de Pago 7)',
            'description' => 'Seccion Pasarela de Pago 7 para la plantilla LPHS',
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
                ]
                
            ])    
        ]);
        /** block 8 */
        Block::create([
            'name'        => 'lphs_block8',
            'title'       => 'Blocke 8 (Donwload App Movil 8)',
            'description' => 'Seccion Donwload App Movil  para la plantilla LPHS',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'brand' => [
                    'type'   => 'image',
                    'name'   => 'brand',
                    'label'  => 'Marca de la empresa',
                    'value'  => 'brand.png',
                    'width'  => 6
                ],
                'iphone' => [
                    'type'   => 'image',
                    'name'   => 'iphone',
                    'label'  => 'Iphone Histream',
                    'value'  => 'iphone.png',
                    'width'  => 6
                ],
                'title_strong' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Introducing Game Changing
                    <br>Lifestyle Apps',
                    'width'  => 12
                ],
                'parrafo' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'parrafo',
                    'label'  => 'editor html',
                    'value'  => 'The simple, intuitive app that makes it easy
                    <br>to make happy, manage your lifestyle,
                    <br>and work balances faster.',
                    'width'  => 12
                ],
                'image1' => [
                    'type'   => 'image',
                    'name'   => 'image1',
                    'label'  => 'imagen play store',
                    'value'  => 'playstore.png',
                    'width'  => 6
                ],
                'image2' => [
                    'type'   => 'image',
                    'name'   => 'image2',
                    'label'  => 'imagen app store',
                    'value'  => 'appstore.png',
                    'width'  => 6
                ],
                'action1' => [
                    'type'   => 'text_area',
                    'name'   => 'action1',
                    'label'  => 'accion de la imagen 1',
                    'value'  => 'null',
                    'width'  => 6
                ],
                'action2' => [
                    'type'   => 'text_area',
                    'name'   => 'action2',
                    'label'  => 'accion de la imagen 2',
                    'value'  => 'null',
                    'width'  => 6
                ],
            ])    
        ]);            
           

        //----------------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'politica privacidad',
            'slug'        =>  'politica-privacidad',
            'user_id'     =>  1,
            'direction'   =>  'webstreaming::pages.generica',
            'description' =>  'Pagina de politicas y privacidad de HiStream.',
            'details'     =>   json_encode([
                'contenido1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'contenido1',
                    'label'  => 'Parrafo',
                    'value'  => 'Soy un text',
                    'width'  => 12
                ],
            ])
        ]);
        $count=1;
        Block::create([
            'name'        => 'body',
            'title'       => 'Blocke Editor HTML',
            'description' => 'Blocke Generico para Editar el HTML',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'body' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'body',
                    'label'  => 'Editor HTML',
                    'value'  => null,
                    'width'  => 12
                ]
            ])    
        ]);


        //-------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'terminos condiones',
            'slug'        =>  'terminos-condiones',
            'user_id'     =>  1,
            'direction'   =>  'webstreaming::pages.generica',
            'description' =>  'Pagina de terminos y condiones de HiStream.',
            'details'     =>   json_encode([
                'contenido' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'contenido',
                    'label'  => 'Parrafo',
                    'value'  => 'Soy un text',
                    'width'  => 12
                ],
            ])
        ]);  
        $count=1;
        Block::create([
            'name'        => 'body',
            'title'       => 'Blocke Editor HTML',
            'description' => 'Blocke Generico para Editar el HTML',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'body' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'body',
                    'label'  => 'Editor HTML',
                    'value'  => null,
                    'width'  => 12
                ]
            ])    
        ]);
    }
}
