<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgProductDetail extends Model
{
    use SoftDeletes;
    protected $table = 'bg_product_details';
    protected $fillable = ['code', 'price', 'price_last', 'stock'];
}
