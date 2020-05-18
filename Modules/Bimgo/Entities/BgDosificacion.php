<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgDosificacion extends Model
{
    use SoftDeletes;
    protected $table = 'bg_dosificacions';
    protected $fillable = ['autorizacion', 
    	'fecha_emision', 
    	'llave_dosificacion', 
    	'leyenda_lectura', 
    	'actividad_economica', 
    	'nit', 
    	'office_id',
    	'estado',
    	'user_id'    	
    ];
}
