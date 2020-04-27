<?php

namespace Modules\Boldig\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BoldigDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeetingTableSeeder::class);
        $this->call(PageTableSeeder::class);
    }
}
