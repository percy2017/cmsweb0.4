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
        //--------------MODULE INVENTARIO -----------------------------------
        $CategoryDataType = DataType::where('slug', 'bg_categories')->firstOrFail();
        $SubCategoryDataType = DataType::where('slug', 'bg_sub_categories')->firstOrFail();
        $BrandsDataType = DataType::where('slug', 'bg_brands')->firstOrFail();
        $ProductDataType = DataType::where('slug', 'bg_products')->firstOrFail();
        $ProductDetailsDataType = DataType::where('slug', 'bg_product_details')->firstOrFail();
        $SucursalDataType = DataType::where('slug', 'bg_branch_offices')->firstOrFail();
        $InventarioDataType = DataType::where('slug', 'bg_product_offices')->firstOrFail();
        $tansferDataType = DataType::where('slug', 'bg_transfers')->firstOrFail();

        //---------------- MODULE VENTAS --------------------------------------------
        $customerDataType = DataType::where('slug', 'bg_customers')->firstOrFail();
        $cashDataType = DataType::where('slug', 'bg_cashes')->firstOrFail();
        $saleDataType = DataType::where('slug', 'bg_sales')->firstOrFail();
        $seatDataType = DataType::where('slug', 'bg_seats')->firstOrFail();
        $dosificacionDataType = DataType::where('slug', 'bg_dosificacions')->firstOrFail();
        $RegionDataType = DataType::where('slug', 'bg_regions')->firstOrFail();
        $PaymentDataType = DataType::where('slug', 'bg_payments')->firstOrFail();
        $LocationDataType = DataType::where('slug', 'bg_locations')->firstOrFail();
        $LoyaltyDataType = DataType::where('slug', 'bg_loyalties')->firstOrFail();
        $SaleDetailDataType = DataType::where('slug', 'bg_sale_details')->firstOrFail();
        
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
        $dataRow = $this->dataRow($SubCategoryDataType, 'block');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Blocke',
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
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece el lugar de la Sub Categoria'
                    ],
                    'options' => [
                        'null' => 'null',
                        'categories' => 'categories',
                        'sales' => 'sales'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'icons');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Icons',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Icono de la Sub Categoria'
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
                        'message' => 'Nombre de la Marca'
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
                'display_name' => 'Imagenes 1080x1080',
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
                        'message' => 'Imagenes del producto de 1080x1080'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'images_large');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => 'Imagenes 1080x1920',
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
                        'message' => 'Imagenes del producto de 1080x1920'
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
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'offer');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto en Oferta',
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
                        'message' => 'Establece si el producto esta en oferta'
                    ],
                    'on'  => 'En Oferta',
                    'off' => 'No en Oferta',
                    'checked' => false,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'block');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Blocke',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '3',
                    ],
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece el lugar del producto'
                    ],
                    'options' => [
                        'null' => 'null',
                        'recomments' => 'recomments',
                        'moda' => 'moda'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'shortage');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto en Oferta',
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
                        'message' => 'Establece si el producto esta en Escacez'
                    ],
                    'on'  => 'Escacez',
                    'off' => 'No Escacez',
                    'checked' => false,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'views');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Vistas',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'default' => 1,
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Vistas del Producto'
                    ],
                    'display' => [
                        'width' => '3'
                    ]
                ],
                'order'        => $postion++,
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
                    'label'       => 'name',
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
        $dataRow = $this->dataRow($customerDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'options'  =>[
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
        $dataRow = $this->dataRow($customerDataType, 'name_bussiness');
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
        $dataRow = $this->dataRow($customerDataType, 'client_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Usuario',
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
                    'model'       => 'App\\User',
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'user_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($customerDataType, 'nit_ci');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'NIT o Carnet',
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
        $dataRow = $this->dataRow($customerDataType, 'banner');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Banner',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display'  => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($customerDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
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
        $dataRow = $this->dataRow($customerDataType, 'address');
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
                        'width' => 12
                    ]
                ],
                'order'        => $postion++,
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
        $dataRow = $this->dataRow($customerDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'user_id',
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

        $dataRow = $this->dataRow($saleDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'options' => [
                        'Al Contado' => 'Al Contado',
                        'Al Credito' => 'Al Credito'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'state');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Estados',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'options' => [
                        'Pedido realizado' => 'Pedido realizado',
                        'En es espera de pago' => 'En es espera de pago',
                        'Pedido enviado' => 'Pedido enviado',
                        'Pedido Entreago' => 'Pedido Entreago' 
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
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
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCustomer',
                    'table'       => 'bg_customers',
                    'type'        => 'belongsTo',
                    'column'      => 'customer_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'customer_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'sale_belongsto_location_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Ubicacion',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgLocation',
                    'table'       => 'bg_locations',
                    'type'        => 'belongsTo',
                    'column'      => 'location_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_locations',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'sale_belongsto_payment_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Pago',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgPayment',
                    'table'       => 'bg_payments',
                    'type'        => 'belongsTo',
                    'column'      => 'payment_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_payments',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'sale_belongsto_loyalty_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Fidelizacion',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgLoyalty',
                    'table'       => 'bg_loyalties',
                    'type'        => 'belongsTo',
                    'column'      => 'loyalty_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_loyalties',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'discounts');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Descuento',
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
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        
        $dataRow = $this->dataRow($saleDataType, 'total');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Total',
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

        $dataRow = $this->dataRow($saleDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Traking',
                'display_name' => 'Traking',
                'required'     => 0,
                'browse'       => 1,
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
                        'width' => '3'
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
                        'width' => '3'
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
                        'width' => '3'
                    ]
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($saleDataType, 'customer_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'customer_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
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

        $dataRow = $this->dataRow($saleDataType, 'location_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'location_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
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

        $dataRow = $this->dataRow($saleDataType, 'payment_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'payment_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
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

        $dataRow = $this->dataRow($saleDataType, 'loyalty_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'loyalty_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
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



        /**
         * ------------------------------------------------
         *               Formulario Regions
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($RegionDataType, 'id');
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
        $dataRow = $this->dataRow($RegionDataType, 'name');
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
                        'message' => 'Nombre de la Region'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($RegionDataType, 'image');
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
        $dataRow = $this->dataRow($RegionDataType, 'price_shipping');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio de Envio',
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
        $dataRow = $this->dataRow($RegionDataType, 'day_delivery');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdwon',
                'display_name' => 'Dias de Envio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        '1 Dia' => '1 Dia',
                        '1 Dia' => '1 Dia'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($RegionDataType, 'hour_delivery');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdwon',
                'display_name' => 'Horas de Envio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        '1 Hora' => '1 Hora',
                        '2 Horas' => '2 Horas'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($RegionDataType, 'description');
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
        $dataRow = $this->dataRow($RegionDataType, 'created_at');
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
        $dataRow = $this->dataRow($RegionDataType, 'updated_at');
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
        $dataRow = $this->dataRow($RegionDataType, 'deleted_at');
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
         *               Formulario PaymentDataType
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($PaymentDataType, 'id');
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
        $dataRow = $this->dataRow($PaymentDataType, 'name');
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
                        'message' => 'Nombre del Pago'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($PaymentDataType, 'image');
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
        $dataRow = $this->dataRow($PaymentDataType, 'details');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Editor Json',
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
        $dataRow = $this->dataRow($PaymentDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_text',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 6
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($PaymentDataType, 'created_at');
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
        $dataRow = $this->dataRow($PaymentDataType, 'updated_at');
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
        $dataRow = $this->dataRow($PaymentDataType, 'deleted_at');
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
         *               Formulario LocationDataType
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($LocationDataType, 'id');
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
        $dataRow = $this->dataRow($LocationDataType, 'map');
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
                        'width' => '6'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'location_belongsto_region_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Cuidad o Localidad',
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
                    'model'       => 'Modules\\Bimgo\\Entities\\BgRegion',
                    'table'       => 'bg_regions',
                    'type'        => 'belongsTo',
                    'column'      => 'region_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'bg_regions',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'location_belongsto_customer_relationship');
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
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCustomer',
                    'table'       => 'bg_customers',
                    'type'        => 'belongsTo',
                    'column'      => 'customer_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_customers',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Referencia',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'options' => [
                        'Casa' => 'Casa',
                        'Trabajo' => 'Trabajo',
                        'Lugar Temporal' => 'Luagar Temporal'
                    ],
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Referencias de la Ubicacion'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'default');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Predeterminado',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'on'  => 'default',
                    'off' => 'No default',
                    'checked' => false,
                    'display'   => [
                        'width'  => '6',
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'address');
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
                'details'      => [
                    'display' => [
                        'width' => 12
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'latitud');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Latitud',
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
        $dataRow = $this->dataRow($LocationDataType, 'longitud');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Longitud',
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
        $dataRow = $this->dataRow($LocationDataType, 'created_at');
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
        $dataRow = $this->dataRow($LocationDataType, 'updated_at');
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
        $dataRow = $this->dataRow($LocationDataType, 'deleted_at');
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
        $dataRow = $this->dataRow($LocationDataType, 'region_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'region_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($LocationDataType, 'customer_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'customer_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
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
         *               Formulario LoyaltyDataType
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($LoyaltyDataType, 'id');
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
        $dataRow = $this->dataRow($LoyaltyDataType, 'type');
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
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        'tax' => 'tax',
                        'shipping' => 'shipping'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($LoyaltyDataType, 'name');
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
                        'message' => 'Nombre de la Fidelizacion'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        
        $dataRow = $this->dataRow($LoyaltyDataType, 'target');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Target',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        'subtotal' => 'subtotal',
                        'total' => 'total'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($LoyaltyDataType, 'value1');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Valor o Monto',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Valor o Monto'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($LoyaltyDataType, 'attributes');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Editor Json',
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
        $dataRow = $this->dataRow($LoyaltyDataType, 'order1');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Orden',
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
        $dataRow = $this->dataRow($LoyaltyDataType, 'created_at');
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
        $dataRow = $this->dataRow($LoyaltyDataType, 'updated_at');
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
        $dataRow = $this->dataRow($LoyaltyDataType, 'deleted_at');
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
         *               Formulario SaleDetailDataType
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($SaleDetailDataType, 'id');
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
        $dataRow = $this->dataRow($SaleDetailDataType, 'detail_belongsto_sale_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Venta',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Venta'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgSale',
                    'table'       => 'bg_sales',
                    'type'        => 'belongsTo',
                    'column'      => 'sale_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_sales',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($SaleDetailDataType, 'detail_belongsto_product_relationship');
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
                        'message' => 'Producto'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgProduct',
                    'table'       => 'bg_products',
                    'type'        => 'belongsTo',
                    'column'      => 'product_id',
                    'key'         => 'id',
                    'label'       => 'name_bussiness',
                    'pivot_table' => 'bg_products',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($SaleDetailDataType, 'created_at');
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
        $dataRow = $this->dataRow($SaleDetailDataType, 'updated_at');
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
        $dataRow = $this->dataRow($SaleDetailDataType, 'deleted_at');
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
        $dataRow = $this->dataRow($SaleDetailDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'product_id',
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
        $dataRow = $this->dataRow($SaleDetailDataType, 'sale_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'sale_id',
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



    }

    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
