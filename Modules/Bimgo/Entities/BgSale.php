<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgSale extends Model
{
    use SoftDeletes;
    protected $table = 'bg_sales';
    protected $fillable = ['amount', 
    	'tipo_venta', 
    	'pagada', 
    	'importe', 
    	'importe_ice', 
    	'importe_exento', 
    	'tasa_cero', 
    	'subtotal', 
    	'descuentos', 
    	'importe_base', 
    	'debito_fiscal', 
    	'cobro_adicional', 
    	'monto_recibido',
    	'venta_tipo',
    	'estado',
    	'user_id',
    	'caja_id',
    	'customer_id'
    ];
}
