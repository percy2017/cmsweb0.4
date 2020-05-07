<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgCash extends Model
{
    use SoftDeletes;
    protected $table = 'bg_cashes';
    protected $fillable = ['name', 'apertura', 'observaciones', 'fecha_apertura', 'fecha_cierre', 'monto_inicial', 'monto_final', 'monto_real', 'monto_faltante', 'total_egreso', 'total_ingreso', 'estado', 'user_id'];
}
