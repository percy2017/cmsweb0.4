<?php

namespace Modules\Yimbo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        ->update(['value' => 'Yimbo v1.0']);

        DB::table('settings')
            ->where('key', 'admin.title')
            ->update(['value' => 'Yimbo v1.0']);

        DB::table('settings')
            ->where('key', 'site.description')
            ->update(['value' => 'Software inteligente para crar y administracion negocios de venta de comida y delivery']);

        DB::table('settings')
            ->where('key', 'site.page')
            ->update(['value' => 'landingpage-yimbo']);
    }
}
