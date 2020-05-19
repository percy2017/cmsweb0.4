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
            'description_short' => 'Software para crar y administrar reuniones virtuales y video conferencias.'
        ]);
        $module = Module::create([
            'installed'         => false,
            'name'              => 'BolDig v1.0',
            'description_short' => 'Paquete para crear y administrar periodicos digitales.'
        ]);

        $module = Module::create([
            'installed'         => false,
            'name'              => 'BimGo v1.0',
            'description_short' => 'Software para crar y administrar tienda en linea.'
        ]);

        $module = Module::create([
            'installed'         => false,
            'name'              => 'Yimbo v1.0',
            'description_short' => 'Software para crar y administrar restaurant y delivery.'
        ]);

        $module = Module::create([
            'installed'         => false,
            'name'              => 'MedicWeb v1.0',
            'description_short' => 'Software para crar y administrar Consultorio Medico.'
        ]);
    }
}
