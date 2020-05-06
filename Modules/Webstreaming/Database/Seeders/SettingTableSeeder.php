<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')
            ->where('key', 'site.title')
            ->update(['value' => 'HiStream']);

        DB::table('settings')
            ->where('key', 'admin.title')
            ->update(['value' => 'HiStream v1.0']);

        DB::table('settings')
            ->where('key', 'site.description')
            ->update(['value' => 'Software inteligente para video conferencias y reuniones']);

        DB::table('settings')
            ->where('key', 'site.page')
            ->update(['value' => 'landing-page-histream']);
        
        $cont = 1;

        DB::table('settings')->insert([
            'key' => 'histream.server',
            'display_name' => 'Servidor',
            'value' => 'https://live.loginweb.dev',
            'details' => '',
            'type' => 'text',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.app_android',
            'display_name' => 'App Android',
            'value' => 'https://play.google.com/store/apps/details?id=com.loginweb.histream',
            'details' => '',
            'type' => 'text',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.greetings',
            'display_name' => 'Bienvenida',
            'value' => '<h4 class="alert-heading" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 1.5rem; color: #004085; font-family: Roboto, sans-serif;">Bienvenido!</h4>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #004085; font-family: Roboto, sans-serif; font-size: 16px;">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr style="box-sizing: content-box; height: 0px; overflow: visible; margin-top: 1rem; margin-bottom: 1rem; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: #9fcdff; color: #004085; font-family: Roboto, sans-serif; font-size: 16px;" />
            <p class="mb-0" style="box-sizing: border-box; margin-top: 0px; color: #004085; font-family: Roboto, sans-serif; font-size: 16px; margin-bottom: 0px !important;">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>',
            'details' => '',
            'type' => 'rich_text_box',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);
       /*  $setting = $this->findSetting('site.pag_icon');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Agregar icon al Título del sitio',
                'value'        => [
                    'options'  => [
                        'fas fa-video'       => 'Video',
                        'fa fa-university'   => 'University',
                        'fa fa-video-camera' => 'Camera'
                    ]
                ],
                'details'      => null,
                'type'         => 'select_dropdown',
                'order'        => 6,
                'group'        => 'Site',
            ])->save();
        } */
        
        DB::table('settings')->insert([
            'key' => 'histream.tutorial',
            'display_name' => 'Tutorial',
            'value' => '<h2>&nbsp;</h2>
            <h2>El pasaje est&aacute;ndar Lorem Ipsum, usado desde el a&ntilde;o 1500.</h2>
            <p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family:  Arial, sans-serif;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <ul>
            <li><span style="color: #000000; font-family:  Arial, sans-serif; text-align: justify;">amet, consectetur adipiscing elit, sed or incididunt ut labore</span></li>
            <li><span style="color: #000000; font-family:  Arial, sans-serif; text-align: justify;">amet, consg elit, sed do eiusmod tempor incididunt ut labore</span></li>
            <li><span style="color: #000000; font-family:  Arial, sans-serif; text-align: justify;">amet, consectetur adipiscing elit, sed do ent ut labore</span></li>
            <li><span style="color: #000000; font-family:  Arial, sans-serif; text-align: justify;">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></li>
            </ul>
            <div class="text-center">
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/N00DzBNPJEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </div>',
            'details' => '',
            'type' => 'rich_text_box',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.video_tutorial',
            'display_name' => 'Video Tutorial',
            'value' => 'https://www.youtube.com/watch?v=N00DzBNPJEw',
            'details' => '',
            'type' => 'text',
            'order' => 4,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.waiting',
            'display_name' => 'En espera',
            'value' => 'Tu suscripción será aprobada en unos momentos por nuestro personal, mientras tanto tendras las opciones del plan gratuito.',
            'details' => '',
            'type' => 'text_area',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.upgrade',
            'display_name' => 'Subir de nivel',
            'value' => 'Tu suscripción es gratuita por lo que solo tendras un número limitado de conferencias e invitados.',
            'details' => '',
            'type' => 'text_area',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);

        DB::table('settings')->insert([
            'key' => 'histream.suscribre',
            'display_name' => 'Suscribirse',
            'value' => 'Tus suscripción ha vencido, por el momento solo podras acceder a las opciones que incluye el plan gratuito.',
            'details' => '',
            'type' => 'text_area',
            'order' => $cont++,
            'group' => 'HiStream'
        ]);
    }
    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */



    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
