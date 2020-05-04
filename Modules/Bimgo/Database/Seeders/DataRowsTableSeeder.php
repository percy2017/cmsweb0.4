<?php

namespace Modules\Bimgo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CategoryDataType = DataType::where('slug', 'bg_categories')->firstOrFail();
        $SubCategoryDataType = DataType::where('slug', 'bg_sub_categories')->firstOrFail();
        $ProductDataType = DataType::where('slug', 'bg_products')->firstOrFail();
         /**
         * ------------------------------------------------
         *               Formulario Category
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($CategoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                        'forceUpdate' => true
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }

           /**
         * ------------------------------------------------
         *               Formulario SubCategory
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($SubCategoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'sub_belongsto_category_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCategory',
                    'table'       => 'bg_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'category_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }



        /**
         * ------------------------------------------------
         *               Formulario Products
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($ProductDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'slugify' => [
                        'origin' => 'name',
                        'forceUpdate' => true
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => 'Imagenes',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'stock');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Stock',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'sub_category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Sub Categoria',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'product_belongsto_subcategory_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Sub Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgSubCategory',
                    'table'       => 'bg_sub_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'sub_category_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'sub_category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Traking',
                'display_name' => 'Traking',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
    }

    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
