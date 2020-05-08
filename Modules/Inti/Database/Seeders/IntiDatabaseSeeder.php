<?php

namespace Modules\Inti\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class IntiDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DatatypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(SeetingTableSeeder::class);
        $this->call(PageTableSeeder::class);
    }
}
