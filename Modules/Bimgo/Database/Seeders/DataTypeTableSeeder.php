<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataType;

class DataTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'bg_categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_categories',
                'display_name_singular' => 'Categoria',
                'display_name_plural'   => 'Categorias',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgCategory',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\CategoryController',
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

        $dataType = $this->dataType('slug', 'bg_sub_categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_sub_categories',
                'display_name_singular' => 'Sub Categoria',
                'display_name_plural'   => 'Sub Categorias',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgSubCategory',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\SubCategoryController',
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

        $dataType = $this->dataType('slug', 'bg_products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_products',
                'display_name_singular' => 'Producto',
                'display_name_plural'   => 'Productos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgProduct',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\ProductController',
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
