<?php

namespace Modules\Webstreaming\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *hs_plan_user
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
                'icon'                  => 'fa fa-weixin',
                'model_name'            => 'Modules\\Webstreaming\\Entities\\Chat',
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


        $dataType = $this->dataType('slug', 'hs_plans');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'hs_plans',
                'display_name_singular' => 'Plan',
                'display_name_plural'   => 'Planes',
                'icon'                  => 'fa fa-bolt',
                'model_name'            => 'Modules\\Webstreaming\\Entities\\Plan',
                'policy_name'           => null,
                'controller'            => 'Modules\\Webstreaming\\Http\\Controllers\\PlansController',
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

        $dataType = $this->dataType('slug', 'hs_meetings');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'hs_meetings',
                'display_name_singular' => 'Reunion',
                'display_name_plural'   => 'Reuniones',
                'icon'                  => 'fa fa-plug',
                'model_name'            => 'Modules\\Webstreaming\\Entities\\Meeting',
                'policy_name'           => null,
                'controller'            => 'Modules\\Webstreaming\\Http\\Controllers\\MeetingController',
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
        $dataType = $this->dataType('slug', 'hs_plan_user');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'hs_plan_user',
                'display_name_singular' => 'Reunion',
                'display_name_plural'   => 'Reuniones',
                'icon'                  => 'fa fa-plug',
                'model_name'            => 'Modules\\Webstreaming\\Entities\\PlanUser',
                'policy_name'           => null,
                'controller'            => 'Modules\\Webstreaming\\Http\\Controllers\\Plan_userController',
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
