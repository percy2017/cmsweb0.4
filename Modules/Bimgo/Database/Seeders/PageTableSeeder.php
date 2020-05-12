<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;
use App\Block;
class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        $page = Page::create([
            'name'        =>  'Ecommerce-1',
            'slug'        =>  'ecommerce-1',
            'user_id'     =>  1,
            'direction'   =>  'bimgo::pages.ecommerce1',
            'description' =>  'Pagina predeterminada para comercio electronico v1'
        ]);
    
       
    }
}
