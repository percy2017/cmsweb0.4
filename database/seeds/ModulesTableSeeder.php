<?php

use Illuminate\Database\Seeder;
use App\Module;
class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = Module::create([
            'installed'         => false,
            'name'              => 'Inti v1.0',
            'description_short' => 'Paquete para crear y administrar centros educativos.'
        ]);

        $module = Module::create([
            'installed'         => false,
            'name'              => 'hiStream v1.0',
            'description_short' => 'Software para crar reuniones virtuales y video conferencias.'
        ]);
    }
}
