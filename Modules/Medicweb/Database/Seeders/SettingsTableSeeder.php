<?php

namespace Modules\Medicweb\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
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
        ->update(['value' => 'MedicWeb v1.0']);

        DB::table('settings')
            ->where('key', 'admin.title')
            ->update(['value' => 'MedicWeb v1.0']);

        DB::table('settings')
            ->where('key', 'site.description')
            ->update(['value' => 'Software inteligente para crear y administrar Consultorios Medicos']);

        DB::table('settings')
            ->where('key', 'site.page')
            ->update(['value' => 'index']);
    }
}
