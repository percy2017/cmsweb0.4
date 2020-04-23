<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

use Modules\Webstreaming\Entities\PlanType;

class PlanTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        PlanType::create([
            'name' => 'Gratis',
            'max_persons' => 10,
            'max_time' => 40,
            'price' => 0
        ]);
        PlanType::create([
            'name' => 'Profesional',
            'max_persons' => 100,
            'max_time' => 360,
            'price' => 100
        ]);
        PlanType::create([
            'name' => 'Empresarial',
            'max_persons' => 300,
            'max_time' => 1440,
            'price' => 300
        ]);
    }
}
