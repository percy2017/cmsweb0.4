<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BimgoDatabaseSeeder extends Seeder
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
        $this->call(DataTypeTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DataDefaultTableSeeder::class);
    }
}
