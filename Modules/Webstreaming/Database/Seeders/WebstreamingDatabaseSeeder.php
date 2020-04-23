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

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
