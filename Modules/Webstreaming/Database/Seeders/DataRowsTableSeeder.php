<?php

namespace Modules\Webstreaming\Database\Seeders;

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
        $ChatDataType = DataType::where('slug', 'hs_chats')->firstOrFail();
        $PlanDataType = DataType::where('slug', 'hs_plans')->firstOrFail();
        $MeetingDataType = DataType::where('slug', 'hs_meetings')->firstOrFail();
        $PlanUserDataType = DataType::where('slug', 'hs_plan_user')->firstOrFail();
        /**
         * ------------------------------------------------
         *               Formulario Course
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($ChatDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'displey' => [
                        'width' => '6'
                    ],
                    /* 'actions' => [
                        'table' => 'inti_contents',
                        'key' => 'course_id',
                        'type' => 'create',
                        'message' => 'Crear Nuevo Contenido'
                    ], */
                ],
                'order'        => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($ChatDataType, 'message');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Mensaje',
                'required'     => 1,
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
        $dataRow = $this->dataRow($ChatDataType, 'message_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo de Mensaje',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [

                    'options' => [
                        'option1' => 'Privado',
                        'option2' => 'publico'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ]

                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ChatDataType, 'transmitter');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Emisor',
                'required'     => 1,
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
        $dataRow = $this->dataRow($ChatDataType, 'receiver');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Receptor',
                'required'     => 1,
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
        $dataRow = $this->dataRow($ChatDataType, 'file');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Archivo',
                'required'     => 1,
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
        $dataRow = $this->dataRow($ChatDataType, 'chat_belongsto_meeting_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Reunion',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Webstreaming\\Entities\\Meeting',
                    'table'       => 'hs_meetings',
                    'type'        => 'belongsTo',
                    'column'      => 'hs_meeting_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'hs_meetings',
                    'pivot'       => 0,
                ],
                'order' => $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ChatDataType, 'hs_meeting_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'meeting_id',
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
        $dataRow = $this->dataRow($ChatDataType, 'created_at');
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

        $dataRow = $this->dataRow($ChatDataType, 'updated_at');
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

        $dataRow = $this->dataRow($ChatDataType, 'deleted_at');
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
         * ---------------------------------------------------------------------------
         *          PLANES - FORMULARIO
         * --------------------------------------------------------------------------
         */
        $dataRow = $this->dataRow($PlanDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'displey' => [
                        'width' => '6'
                    ]
                ],
                'order' => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($PlanDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre del plan',
                'required'     => 1,
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
        $dataRow = $this->dataRow($PlanDataType, 'max_person');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Numero de personas del plan',
                'required'     => 1,
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
        $dataRow = $this->dataRow($PlanDataType, 'max_time');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Tiempo Maximo del plan',
                'required'     => 1,
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
        $dataRow = $this->dataRow($PlanDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio del plan',
                'required'     => 1,
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
        $dataRow = $this->dataRow($PlanDataType, 'created_at');
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

        $dataRow = $this->dataRow($PlanDataType, 'updated_at');
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

        $dataRow = $this->dataRow($PlanDataType, 'deleted_at');
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
         * ---------------------------------------------------------------------------
         *          Reuniones - FORMULARIO
         * --------------------------------------------------------------------------
         */

        $dataRow = $this->dataRow($MeetingDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'displey' => [
                        'width' => '6'
                    ]
                ],
                'order' => $postion++,
            ])->save();
        }

        $dataRow = $this->dataRow($MeetingDataType, 'meeting_types');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo de Reuniones',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        'option1' => 'Conferencia',
                        'option2' => 'Video blog'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($MeetingDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre de la Reunion',
                'required'     => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'day');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => 'Dia',
                'required'     => 1,
                'browse'       => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'start');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Hora Inicio',
                'required'     => 1,
                'browse'       => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'finish');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Hora Fin',
                'required'     => 1,
                'browse'       => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'descriptions');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion de la Reunion',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        'option1' => 'Conferencia',
                        'option2' => 'Video blog'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($MeetingDataType, 'link');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Compartir Enlace',
                'required'     => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'slug');
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
        $dataRow = $this->dataRow($MeetingDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Traking',
                'display_name' => 'Traking',
                'required'     => 1,
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
        $dataRow = $this->dataRow($MeetingDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
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
        $dataRow = $this->dataRow($MeetingDataType, 'updated_at');
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
        $dataRow = $this->dataRow($MeetingDataType, 'deleted_at');
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
         * ---------------------------------------------------------------------------
         *          plan-user - FORMULARIO
         * --------------------------------------------------------------------------
         */

        $dataRow = $this->dataRow($PlanUserDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'displey' => [
                        'width' => '6'
                    ]
                ],
                'order' => $postion++,
            ])->save();
        }
        /*      $dataRow = $this->dataRow($PlanUserDataType, 'plan_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Plan',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'Modules\\Webstreaming\\Entities\\Plan',
                    'table'       => 'hs_plans',
                    'type'        => 'belongsTo',
                    'column'      => 'hs_plan_type_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'hs_plans',
                    'pivot'       => 0,
                    'display'   => [
                        'width'  => '6',
                        ]
                    ],
                    'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($PlanUserDataType, 'user_belongsto_plan_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Usuarios',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\User',
                    'table'       => 'hs_plans',
                    'type'        => 'belongsTo',
                    'column'      => 'user_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                    'display'   => [
                        'width'  => '6',
                        ]
                    ],
                    'order'=> $postion++,
            ])->save();
        } */
        $dataRow = $this->dataRow($PlanUserDataType, 'start');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Inicio Membresia',
                'required'     => 1,
                'browse'       => 1,
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
        $dataRow = $this->dataRow($PlanUserDataType, 'finish');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'time',
                'display_name' => 'Fin Membresia',
                'required'     => 1,
                'browse'       => 1,
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
        $dataRow = $this->dataRow($PlanUserDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Estado',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '4',
                    ],
                    "on" => "Activo",
                    "off" => "Baja",
                    "checked" => true
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($PlanUserDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
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
        $dataRow = $this->dataRow($PlanUserDataType, 'updated_at');
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
        $dataRow = $this->dataRow($PlanUserDataType, 'deleted_at');
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




    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
