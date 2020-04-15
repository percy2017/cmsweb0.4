<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'avatar' => null,
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);

        // User::create([
        //     'name' => 'editor',
        //     'email' => 'luis.flores@gmail.com',
        //     'avatar' => null,
        //     'password' => Hash::make('password')
        // ]);
    }
}
