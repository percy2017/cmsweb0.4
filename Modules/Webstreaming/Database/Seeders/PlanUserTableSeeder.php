<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

use Modules\Webstreaming\Entities\PlanUser;

class PlanUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        $date = date('Y-m-d');
        PlanUser::create([
            'hs_plan_id' => 3,
            'user_id' => 1,
            'start' => $date,
            'finish' => date('Y-m-d', strtotime($date."+1 years")),
            'status' => 1
        ]);
    }
}
