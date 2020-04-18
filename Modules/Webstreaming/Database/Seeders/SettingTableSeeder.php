<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
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
        ->update(['value' => 'HiStream v1.0']);

        DB::table('settings')
            ->where('key', 'admin.title')
            ->update(['value' => 'HiStream v1.0']);

        DB::table('settings')
            ->where('key', 'site.description')
            ->update(['value' => 'Software inteligente para video conferencias y reuniones']);

        DB::table('settings')
            ->where('key', 'site.page')
            ->update(['value' => 'landing-page-histream']);
    }
}
