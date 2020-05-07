<?php

namespace Modules\Inti\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataType;
class DatatypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'inti_categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'inti_categories',
                'display_name_singular' => 'Categoria',
                'display_name_plural'   => 'Categorias',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Inti\\Entities\\IntiCategory',
                'policy_name'           => null,
                'controller'            => 'Modules\\Inti\\Http\\Controllers\\CategoryController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'inti_courses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'inti_courses',
                'display_name_singular' => 'Curso',
                'display_name_plural'   => 'Cursos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Inti\\Entities\\IntiCourse',
                'policy_name'           => null,
                'controller'            => 'Modules\\Inti\\Http\\Controllers\\CoursesController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'inti_trainers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'inti_trainers',
                'display_name_singular' => 'Entrenador',
                'display_name_plural'   => 'Entrenadores',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Inti\\Entities\\IntiTrainer',
                'policy_name'           => null,
                'controller'            => 'Modules\\Inti\\Http\\Controllers\\TrainerController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
    }
    
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
