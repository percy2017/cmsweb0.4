<?php

namespace Modules\Inti\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::generateFor('inti_courses');
        Permission::generateFor('inti_categories');
        Permission::generateFor('inti_trainers');
        Permission::generateFor('inti_schedules');

        $role = Role::where('name', 'admin')->firstOrFail();

        $permissions = Permission::where('table_name', 'inti_categories')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }
        //--------------------------------------------------------------------------------
        $permissions = Permission::where('table_name', 'inti_courses')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }
        //--------------------------------------------------------------------------------
        $permissions = Permission::where('table_name', 'inti_trainers')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }
        //--------------------------------------------------------------------------------
        $permissions = Permission::where('table_name', 'inti_schedules')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }
    }
}
