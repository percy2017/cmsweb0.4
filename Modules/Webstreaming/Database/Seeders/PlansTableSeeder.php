<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

use Modules\Webstreaming\Entities\Plan;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        Plan::create([
            'name' => 'Gratis',
            'max_person' => 10,
            'max_time' => '1:00:00',
            'price' => 0
        ]);
        Plan::create([
            'name' => 'Profesional',
            'max_person' => 100,
            'max_time' => '06:00:00',
            'price' => 100
        ]);
        Plan::create([
            'name' => 'Empresarial',
            'max_person' => 300,
            'max_time' => '23:59:59',
            'price' => 300
        ]);
    }
}
