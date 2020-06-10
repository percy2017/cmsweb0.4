<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Bimgo\Entities\BgCategory;
use Modules\Bimgo\Entities\BgSubCategory;
use Modules\Bimgo\Entities\BgBrand;
class DataDefaultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //------------CAtegory---------------------
        $data = BgCategory::create([
            'title' => 'Category 1',
            'slug' => 'category-1'
        ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 1'
            ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 2'
            ]);
        $data = BgCategory::create([
            'title' => 'Category 2',
            'slug' => 'category-2'
        ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 3'
            ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 4'
            ]);
        $data = BgCategory::create([
            'title' => 'Category 3',
            'slug' => 'category-3'
        ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 5'
            ]);
            $data2 = BgSubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 6'
            ]);
        //------------Marca---------------------
        BgBrand::create([
            'name' => 'Marca 1',
            'slug' => 'marca-1'
        ]);
        BgBrand::create([
            'name' => 'Marca 2',
            'slug' => 'marca-2'
        ]);
        BgBrand::create([
            'name' => 'Marca 3',
            'slug' => 'marca-3'
        ]);
    }
}
