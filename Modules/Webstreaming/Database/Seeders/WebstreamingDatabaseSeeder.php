<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

class WebstreamingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        $this->call(PageTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(SettingTableSeeder::class);
    }
}
