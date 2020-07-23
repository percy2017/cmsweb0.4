<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgDelivery extends Model
{
    use SoftDeletes;
    protected $table = 'bg_deliveries';
    protected $fillable = ['price_shipping', 'day_delivery', 'hour_delivery', 'product_id', 'region_id'];
}
