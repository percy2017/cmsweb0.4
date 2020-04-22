<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'hs_chats');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'hs_chats',
                'display_name_singular' => 'Chat',
                'display_name_plural'   => 'Chats',
                'icon'                  => 'fa fa-id-badge',
                'model_name'            => 'Modules\\Webstreaming\\Entities\\HsChat',
                'policy_name'           => null,
                'controller'            => 'Modules\\Webstreaming\\Http\\Controllers\\ChatsController',
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


    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
    
}