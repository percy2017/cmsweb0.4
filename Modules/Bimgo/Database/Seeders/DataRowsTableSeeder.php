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
        $BrandsDataType = DataType::where('slug', 'bg_brands')->firstOrFail();
        $ProductDataType = DataType::where('slug', 'bg_products')->firstOrFail();
        $ProductDetailsDataType = DataType::where('slug', 'bg_product_details')->firstOrFail();
        $SucursalDataType = DataType::where('slug', 'bg_branch_offices')->firstOrFail();
        $InventarioDataType = DataType::where('slug', 'bg_product_offices')->firstOrFail();
        $tansferDataType = DataType::where('slug', 'bg_transfers')->firstOrFail();
        $customerDataType = DataType::where('slug', 'bg_customers')->firstOrFail();
        $cashDataType = DataType::where('slug', 'bg_cashes')->firstOrFail();
        $saleDataType = DataType::where('slug', 'bg_sales')->firstOrFail();
        $seatDataType = DataType::where('slug', 'bg_seats')->firstOrFail();
        $dosificacionDataType = DataType::where('slug', 'bg_dosificacions')->firstOrFail();


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
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Categorias de los Productos'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Imagen o Benner de la Categoria'
                    ],
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
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
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
        $dataRow = $this->dataRow($CategoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Categoria Asociada a la Sub Categoria'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCategory',
                    'table'       => 'bg_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'category_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Titulo de la Sub Categoria'
                    ],
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
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
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
         *               Formulario Marcas
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($BrandsDataType, 'id');
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
        $dataRow = $this->dataRow($BrandsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Titulo de la Sub Categoria'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image Principal',
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
        $dataRow = $this->dataRow($BrandsDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
       
        $dataRow = $this->dataRow($BrandsDataType, 'created_at');
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
        $dataRow = $this->dataRow($BrandsDataType, 'updated_at');
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
        $dataRow = $this->dataRow($BrandsDataType, 'deleted_at');
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
        $dataRow = $this->dataRow($BrandsDataType, 'slug');
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
                    'actions' => [
                        'table' => 'bg_product_details',
                        'key' => 'product_id',
                        'type' => 'create',
                        'message' => 'New Product'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Sub Categorias de Productos'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgSubCategory',
                    'table'       => 'bg_sub_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'sub_category_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'sub_category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Nombre o Titulo Unico del Producto hasta 120c'
                    ],
                    'actions' => [
                        'table' => 'bg_product_details',
                        'key' => 'product_id',
                        'type' => 'list',
                        'message' => 'Sub Productos'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'product_belongsto_brands_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Marcas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Marcas de Productos'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgBrand',
                    'table'       => 'bg_brands',
                    'type'        => 'belongsTo',
                    'column'      => 'brand_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'bg_brands',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Imagenes del producto de 512x512 hasta 3'
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Descripcion corta del Producto hasta 400c'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'stars');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Estrellas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Estrellas del Producto del 1 -5'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'tags');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_multiple',
                'display_name' => 'Tags',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Tags del Producto del 1 -5'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        'bestseller' => 'bestseller',
                        'SALE' => 'SALE',
                        'new'=> 'new',
                        'best rated' => 'best rated'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'characteristics');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Caracteristicas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Datos basados en JSON'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'published');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto Publicado',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece si el producto esta listo para su venta'
                    ],
                    'on'  => 'Publicado',
                    'off' => 'No Publicado',
                    'checked' => false,
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'description_long');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '12',
                    ],
                ]
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
        $dataRow = $this->dataRow($ProductDataType, 'brand_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Marca',
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


          /**
         * ------------------------------------------------
         *               Formulario Products Details
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($ProductDetailsDataType, 'id');
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
        $dataRow = $this->dataRow($ProductDetailsDataType, 'details_belongsto_product_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Producto',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Producto Asociado'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgProduct',
                    'table'       => 'bg_products',
                    'type'        => 'belongsTo',
                    'column'      => 'product_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'product_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Codigo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Codigo de la tienda'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Filtro del Producto'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        'Color' => 'Color',
                        'Tamaño' => 'Tamaño',
                        'Talla' => 'Talla',
                        'Capacidad' => 'Capacidad',
                        'Modelo' => 'Modelo'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Titulo para la Opcion'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'stock');
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Cantidad en el Inventario'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'price');
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Precio Sin Original'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        } 
        $dataRow = $this->dataRow($ProductDetailsDataType, 'price_last');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio Anterior',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Precio con Descuento'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        } 
        $dataRow = $this->dataRow($ProductDetailsDataType, 'default');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Sub Producto Default',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Data Principal'
                    ],
                    'on'  => 'Dato Default',
                    'off' => 'No Default',
                    'checked' => false,
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'created_at');
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
        $dataRow = $this->dataRow($ProductDetailsDataType, 'updated_at');
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
        $dataRow = $this->dataRow($ProductDetailsDataType, 'deleted_at');
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
        $dataRow = $this->dataRow($ProductDetailsDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Producto',
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
        /**
         * ------------------------------------------------
         *               Formulario Sucursales
         * -----------------------------------------------
         */

        $postion = 1;
        $dataRow = $this->dataRow($SucursalDataType, 'id');
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
        $dataRow = $this->dataRow($SucursalDataType, 'name');
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
        $dataRow = $this->dataRow($SucursalDataType, 'description');
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
        $dataRow = $this->dataRow($SucursalDataType, 'adress');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Direccion',
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
        $dataRow = $this->dataRow($SucursalDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Telefono',
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
        $dataRow = $this->dataRow($SucursalDataType, 'map');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Map',
                'display_name' => 'Mapa',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '12'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SucursalDataType, 'latitud');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'latitud',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SucursalDataType, 'longitud');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'longitud',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SucursalDataType, 'created_at');
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
        $dataRow = $this->dataRow($SucursalDataType, 'updated_at');
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
        $dataRow = $this->dataRow($SucursalDataType, 'deleted_at');
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
         *               Formulario Inventario
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($InventarioDataType, 'id');
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
        $dataRow = $this->dataRow($InventarioDataType, 'stock');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Cantidad',
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
        $dataRow = $this->dataRow($InventarioDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Producto',
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
        $dataRow = $this->dataRow($InventarioDataType, 'inventario_belongsto_product_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Producto',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgProduct',
                    'table'       => 'bg_products',
                    'type'        => 'belongsTo',
                    'column'      => 'product_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_products',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($InventarioDataType, 'office_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Sucursal',
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
        $dataRow = $this->dataRow($InventarioDataType, 'inventario_belongsto_sucursal_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Sucursal',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgBranchOffice',
                    'table'       => 'bg_branch_offices',
                    'type'        => 'belongsTo',
                    'column'      => 'office_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_branch_offices',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($InventarioDataType, 'created_at');
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
        $dataRow = $this->dataRow($InventarioDataType, 'updated_at');
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
        $dataRow = $this->dataRow($InventarioDataType, 'deleted_at');
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
         *               Formulario Traspaso
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($tansferDataType, 'id');
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
        $dataRow = $this->dataRow($tansferDataType, 'description');
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
                        'width' => '12'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($tansferDataType, 'user_id');
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
        $dataRow = $this->dataRow($tansferDataType, 'created_at');
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
        $dataRow = $this->dataRow($tansferDataType, 'updated_at');
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
        $dataRow = $this->dataRow($tansferDataType, 'deleted_at');
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
         *               Formulario Cientes
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($customerDataType, 'id');
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

        $dataRow = $this->dataRow($customerDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre Empresa',
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

        $dataRow = $this->dataRow($customerDataType, 'type_person');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo de Persona',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'options'  =>[
                        '' => '',
                        'Natural' => 'Natural',
                        'Juridica' => 'Juridica'
                    ],
                    'display'  => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($customerDataType, 'nit');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'NIT',
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

        $dataRow = $this->dataRow($customerDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Celular',
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

        $dataRow = $this->dataRow($customerDataType, 'phone_number');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Numero Telefonico',
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

        $dataRow = $this->dataRow($customerDataType, 'adress');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Direccion',
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

        // $dataRow = $this->dataRow($customerDataType, 'correo');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'Correo',
        //         // 'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 0,
        //         'details'      => [
        //             'display' => [
        //                 'width' => '6'
        //             ]
        //         ],
        //         'order'        => $postion++,
        //     ])->save();
        // }

        $dataRow = $this->dataRow($customerDataType, 'user_id');
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

        $dataRow = $this->dataRow($customerDataType, 'created_at');
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

        $dataRow = $this->dataRow($customerDataType, 'updated_at');
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

        $dataRow = $this->dataRow($customerDataType, 'deleted_at');
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
         *               Formulario Caja
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($cashDataType, 'id');
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
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'name');
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
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'apertura');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',                
                'display_name' => 'Apertura',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4',
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'observaciones');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Observaciones',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'fecha_apertura');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => 'Fecha Apertura',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'fecha_cierre');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => 'Fecha Cierre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'monto_inicial');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Monto_Inicial',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'monto_final');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Monto Final',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'monto_real');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Monto Real',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'monto_faltante');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Monto Faltante',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'total_egreso');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Total Egreso',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'total_ingreso');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Total Ingreso',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        // $dataRow = $this->dataRow($cashDataType, 'estado');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'Estado',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 0,
        //         'details'      => [
        //             'display' => [
        //                 'width' => '4'
        //             ]
        //         ],
        //         'order'        => $postion++,
        //     ])->save();
        // }

        $dataRow = $this->dataRow($cashDataType, 'cash_belongsto_branchoffice_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Sucursal',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 4
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgBranchOffice',
                    'table'       => 'bg_branch_offices',
                    'type'        => 'belongsTo',
                    'column'      => 'sucursal_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'sucursal_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'user_id');
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
                        'width'  => '4',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'created_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'updated_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($cashDataType, 'deleted_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        /**
         * ------------------------------------------------
         *               Formulario Sale
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($saleDataType, 'id');
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
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'amount');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Cantidad',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'tipo_venta');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Tipo de Venta',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'pagada');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'pagada',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'importe');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Importe',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'importe_ice');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Importe Ice',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'importe_exento');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Importe Exento',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'tasa_cero');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'tasa cero',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'subtotal');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Sub Total',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'descuentos');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Descuentos',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'importe_base');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Importe Base',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'debito_fiscal');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Debito Fiscal',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'cobro_adicional');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Cobro Adicional',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'monto_recibido');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Monto Recibido',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'venta_tipo');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'venta tipo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'sale_belongsto_cash_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Caja',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 4
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCash',
                    'table'       => 'bg_cashes',
                    'type'        => 'belongsTo',
                    'column'      => 'caja_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'caja_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'sale_belongsto_customer_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Cliente',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 4
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCustomer',
                    'table'       => 'bg_customers',
                    'type'        => 'belongsTo',
                    'column'      => 'customer_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'customer_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'user_id');
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
                        'width'  => '4',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'created_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'updated_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'deleted_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        /**
         * ------------------------------------------------
         *               Formulario Asientos
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($seatDataType, 'id');
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
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'concepto');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Concepto',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'tipo');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Tipo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'fecha');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => 'fecha',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'hora');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Hora',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }


        $dataRow = $this->dataRow($seatDataType, 'user_id');
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
                        'width'  => '4',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'created_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'updated_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($seatDataType, 'deleted_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        /**
         * ------------------------------------------------
         *               Formulario Dosificaciones
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($dosificacionDataType, 'id');
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
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'dosificaacion_belongsto_sucursal_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Sucursal',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 4
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgBranchOffice',
                    'table'       => 'bg_branch_offices',
                    'type'        => 'belongsTo',
                    'column'      => 'office_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'office_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'autorizacion');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Autorizacion',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'fecha_emision');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => 'Fecha Emision',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'llave_dosificacion');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Llave Dosificacion',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'leyenda_lectura');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Leyenda',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'actividad_economica');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Actividad Economica',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'nit');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Nit',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }        


        $dataRow = $this->dataRow($dosificacionDataType, 'user_id');
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
                        'width'  => '4',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'created_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'updated_at');
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
                        'width' => '4'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($dosificacionDataType, 'deleted_at');
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
                        'width' => '4'
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
