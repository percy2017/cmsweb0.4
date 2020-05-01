<?php

namespace Modules\Webstreaming\Database\Seeders;

use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::generateFor('hs_chats');
        Permission::generateFor('hs_plans');
        Permission::generateFor('hs_meetings');
        Permission::generateFor('hs_plan_user');

        Permission::generateFor('conferencias');
        Permission::generateFor('suscripciones');

        $role = Role::where('name', 'admin')->firstOrFail();
        $role_customer = Role::where('name', 'customer')->firstOrFail();
        DB::table('permission_role')->insert([
            'permission_id' => 1, 
            'role_id' => $role_customer->id
        ]);

        $permissions = Permission::where('table_name', 'hs_chats')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }
        
        $permissions = Permission::where('table_name', 'hs_plans')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }

        $permissions = Permission::where('table_name', 'hs_meetings')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }

        $permissions = Permission::where('table_name', 'hs_plan_user')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);
            }
        }

        // ================================
        $permissions = Permission::where('table_name', 'conferencias')->get();
        foreach ($permissions as $key) {
            $rp = DB::table('permission_role')->where('permission_id', $key->id)->first();
            if (!$rp) {
                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role->id
                ]);

                DB::table('permission_role')->insert([
                    'permission_id' => $key->id, 
                    'role_id' => $role_customer->id
                ]);
            }
        }

        $permissions = Permission::where('table_name', 'suscripciones')->get();
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
