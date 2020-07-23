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
        // --------------MODULO INVENTARIO--------------------
        // --------------------------------------------------
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

        $dataType = $this->dataType('slug', 'bg_brands');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_brands',
                'display_name_singular' => 'Marca',
                'display_name_plural'   => 'Marcas',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgBrand',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\BrandController',
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

        $dataType = $this->dataType('slug', 'bg_product_details');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_product_details',
                'display_name_singular' => 'Detalle de Producto',
                'display_name_plural'   => 'Detalles de Productos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgProductDetail',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\ProductDetailsController',
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

        $dataType = $this->dataType('slug', 'bg_branch_offices');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_branch_offices',
                'display_name_singular' => 'Sucursal',
                'display_name_plural'   => 'Sucursales',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgBranchOffice',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\OfficeController',
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

        $dataType = $this->dataType('slug', 'bg_product_offices');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_product_offices',
                'display_name_singular' => 'Inventario',
                'display_name_plural'   => 'Inventarios',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgProductOffice',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\ProductOfficeController',
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

        $dataType = $this->dataType('slug', 'bg_transfers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_transfers',
                'display_name_singular' => 'Traspaso',
                'display_name_plural'   => 'Traspasos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgTransfer',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\TransferController',
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

        $dataType = $this->dataType('slug', 'bg_deliveries');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_deliveries',
                'display_name_singular' => 'Delivery',
                'display_name_plural'   => 'Deliverys',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgDelivery',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\DeliveryController',
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

        // --------------MODULO INVENTARIO--------------------
        // --------------------------------------------------
        $dataType = $this->dataType('slug', 'bg_customers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_customers',
                'display_name_singular' => 'Cliente',
                'display_name_plural'   => 'Clientes',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgCustomer',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\CustomerController',
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

        $dataType = $this->dataType('slug', 'bg_cashes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_cashes',
                'display_name_singular' => 'Caja',
                'display_name_plural'   => 'Cajas',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgCash',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\CaschController',
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

        $dataType = $this->dataType('slug', 'bg_sales');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_sales',
                'display_name_singular' => 'Venta',
                'display_name_plural'   => 'Ventas',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgSale',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\SaleController',
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

        $dataType = $this->dataType('slug', 'bg_seats');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_seats',
                'display_name_singular' => 'Asiento',
                'display_name_plural'   => 'Asientos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgSeat',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\SaleController',
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

        $dataType = $this->dataType('slug', 'bg_dosificacions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_dosificacions',
                'display_name_singular' => 'Dosificacion',
                'display_name_plural'   => 'Dosificacions',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgDosificacion',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\DosificacionController',
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

        $dataType = $this->dataType('slug', 'bg_regions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_regions',
                'display_name_singular' => 'Region',
                'display_name_plural'   => 'Regiones',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgRegion',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\RegionController',
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

        $dataType = $this->dataType('slug', 'bg_payments');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_payments',
                'display_name_singular' => 'Pago',
                'display_name_plural'   => 'Pagos',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgPayment',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\PaymentController',
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

        $dataType = $this->dataType('slug', 'bg_locations');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_locations',
                'display_name_singular' => 'Ubicacion',
                'display_name_plural'   => 'Ubicaciones',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgLocation',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\LocationController',
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

        $dataType = $this->dataType('slug', 'bg_loyalties');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_loyalties',
                'display_name_singular' => 'Fidelizacion',
                'display_name_plural'   => 'Fidelizaciones',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgLoyalty',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\LoyaltyController',
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

        $dataType = $this->dataType('slug', 'bg_sale_details');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'bg_sale_details',
                'display_name_singular' => 'Detalle de Venta',
                'display_name_plural'   => 'Detalle de Ventas',
                'icon'                  => 'voyager-play',
                'model_name'            => 'Modules\\Bimgo\\Entities\\BgSaleDetail',
                'policy_name'           => null,
                'controller'            => 'Modules\\Bimgo\\Http\\Controllers\\SaleDetailController',
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
