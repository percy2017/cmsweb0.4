<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Setting;
class SeetingTableSeeder extends Seeder
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
        ->update(['value' => 'BimGo v1.0']);
        
        DB::table('settings')
            ->where('key', 'admin.title')
            ->update(['value' => 'BimGo v1.0']);

        DB::table('settings')
            ->where('key', 'site.description')
            ->update(['value' => 'Software inteligente para crear y administrar tiendas en internet']);

        DB::table('settings')
            ->where('key', 'site.page')
            ->update(['value' => 'landing-page-bimgo']);

         // ---------------------Eccomerce ------------------------------------
        // ------------------------------------------------------------
        $setting = $this->findSetting('ecommerce.monedas');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Monedas Disponibles',
                'value'        => 'monedas',
                'details'      => json_encode([
                    'default' => 'BOB',
                    'options' => [
                        'BOB' => 'BOB - Bolivia (Bs)',
                        'USD' => 'USD - Dólar EEUU ($)'
                    ]
                ]),
                'type'         => 'radio_btn',
                'order'        => 1,
                'group'        => 'Ecommerce',
            ])->save();
        }

        
    }


    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
